<?php
namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function contact( Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'body_message' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ]);
        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }

        $contact = new Contact;
        $contact->nom = $request->get('name');
        $contact->email = $request->get('email');
        $contact->subject = $request->get('subject');
        $contact->message = nl2br($request->get('body_message'));
        $contact->save();

        Mail::send(['html' => 'emails.contact'],
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'body_message' => nl2br($request->get('body_message'))
            ), function($message)
            {
                $message->from('contact@les4tiches.fr', "Les 4Tiches");
                $message->to('contact@les4tiches.fr', 'Les 4Tiches');
                $message->subject('Nouveau message de contact sur le site Les4Tiches');
            });

        Mail::send(['html' => 'emails.default'],
            array(
                'subject' => "Demande de contact",
                'message_body' => "<p>Vous avez effectuée une demande de contact sur le site <a href='https://les4tiches.fr'>Les 4Tiches</a>.</p><p>Nous reviendrons vers vous le plus rapidement possible.</p>"
            ), function($message) use($request)
            {
                $message->from('contact@les4tiches.fr', "Les 4Tiches");
                $message->to($request->get('email'), $request->get('name'));
                $message->subject('Demande de contact sur le site Les4Tiches');
            });

        if(count(Mail::failures()) > 0){
            return redirect('/contact')->with('error', 'Votre message n\'a pas pu être envoyé. Veuillez nous contacter par mail à cet adresse : contact@les4tiches.fr');
        }else{
            $contact->mail_sent = 1;
            $contact->save();
            return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');
        }
    }


    /**
     * @param Request $request
     */
    public function ajax_contactMe(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');

        $subiect = "Notre dossier de présentation - Les 4Tiches";

        $contact = new Contact;
        $contact->nom = $name;
        $contact->email = $email;
        $contact->subject = "Contact plaquette presentation";
        $contact->save();

        Mail::send(['html' => 'emails.contact_me'], [
            'name'=>$name,
            'email'=>$email,
            'lien_plaquette_pres' => env('APP_URL') . "/docs/plaquette_v2.pdf"
        ], function($m) use($email, $name, $subiect) {
            $m->from('contact@les4tiches.fr', "Les 4Tiches");
            $m->to($email, $name);
            $m->subject($subiect);
        });

        if(count(Mail::failures()) > 0){
            echo json_encode(array('rc'=>-1, "msg"=>"Error"));
        }else{
            echo json_encode(array('rc'=>0, "msg"=>"Success !"));
            $contact->mail_sent = 1;
        }

        $contact->save();

    }

}