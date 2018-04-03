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
}