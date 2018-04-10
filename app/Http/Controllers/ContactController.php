<?php
namespace App\Http\Controllers;
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
            'body_message' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect('/contact')->withErrors($validator)->withInput();
        }

        Mail::send(['html' => 'emails.contact'],
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'body_message' => nl2br($request->get('body_message'))
            ), function($message)
            {
                $message->from('contact@les4tiches.fr');
                $message->to('contact@les4tiches.fr', 'Les 4Tiches');
                $message->subject('Nouveau message de contact sur le site Les4Tiches');
            });
        return redirect('/contact')->with('success', 'Votre message a bien été envoyé.');
    }


    /**
     * @param Request $request
     */
    public function ajax_contactMe(Request $request){

        $name = $request->input('name');
        $email = $request->input('email');

        $subiect = "Notre dossier de présentation - Les 4Tiches";

        Mail::send(['html' => 'emails.contact_me'], [
            'name'=>$name,
            'email'=>$email
        ], function($m) use($email, $name, $subiect) {
            $m->from('contact@les4tiches.fr', "Les 4Tiches");
            $m->to($email, $name);
            $m->subject($subiect);
            $m->attach('docs/plaquette_v1.pdf', array(
                    'as' => 'plaquette-sponsoring-les4tiches.pdf',
                    'mime' => 'application/pdf')
            );
        });
        echo json_encode(array('rc'=>0, "msg"=>"Success !"));
    }
}