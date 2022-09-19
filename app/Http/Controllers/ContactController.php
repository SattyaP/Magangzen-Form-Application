<?php 

namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Models\Contact; use Mail; 

class ContactController extends Controller { 

      public function index() { 

       return view('Magangzen.partials.masukan');
      } 

     public function save(Request $request) { 
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            // 'recaptcha' => 'required|captcha'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        // $contact->recaptcha = $request->recaptcha;

        $contact->save();

        \Mail::send('email.send',
             array(
                 'name' => $request->get('name'),
                 'email' => $request->get('email'),
                 'user_message' => $request->get('message'),
                //  'recaptcha' => $request->get('recaptcha')  
             ), function($message) use ($request)
               {
                  $message->subject('Pesan Masukan');
                  $message->from($request->email);
                  $message->to('magangzens@gmail.com');
               });

          return back()->with('success', 'Thank you for contact us!');

    }
}