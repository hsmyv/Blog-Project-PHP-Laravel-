<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use DB;

class userController extends Controller
{


    //Create New User
    public function store(Request $request){
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'username' => 'required|min:3|unique:users,username',
            'email' => 'required|min:3|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Hash Password // bunu ozum bele eledim cunki artiq user modelde birbasa passwordu hash elemek ucun funksiya yaratmisam
        // $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);


        // Login
        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created');   // bu tip formada yazmaq olar ayrica olarar  session()->flash('success', 'Your account has been created');
        }

    // LogOut
        public function logout(Request $request){
            auth()->logout();

       // $request->session()->invalidate();
        //$request->session()->regenerateToken();

        return redirect()->route('main')->with('success', 'You have been logout');
    }
        // Authenticate User
        public function authenticate(Request $request){

            $formFields = $request->validate([
                'email' => 'required|email',
                'password' => 'required'

            ]);


            if(auth()->attempt($formFields)){
                session()->regenerate();  //hackerlerden qorumaq ucun

                return redirect()->route('main')->with('success', 'You are now logged in!');

            }

            //return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');  // bunu da isletmek olar
            throw ValidationException::withMessages([
                'email' => 'Invalid Credentials'
            ]);
        }


        //send mail
        public function mail(Request $request)
        {
            $subject = $request->subject;
            $email = $request->email;
            $name = $request->name;
            $message = $request->message;
            Mail::send('mail.index', ['name'=> $name], function($message) use ($email, $subject){
                $message->to($email)->subject('HSTUDIO');
            });

            DB::table('mail')->insert([
                'name' => $name,
                'mail' => $email,
                'subject' => $subject,
                'message' => $message
            ]);
            return redirect()->back()->with('success', 'The mail has been sent successfully');
        }

        //send newsletter
        public function letter(Request $request)
        {
            $email = $request->email;

            Mail::send('mail.indexx', ['email'=> $email], function($message) use ($email){
                $message->to($email)->subject('HSTUDIO');
            });
            return redirect()->back()->with('success', 'We will send new information about us to your mail');
     }



   // Show main page
   public function main(){
       return view('webpage.maininformation');
    }
    // Show Register/Create Form
    public function create(){
        return view('webpage.frontregister');
    }

    public function showlogin(){
        return view ("webpage.frontpage");
    }
    public function about(){
        return view("webpage.about");
    }
    public function services(){
        return view("webpage.services");
    }
    public function projects(){
        return view("webpage.projects");
    }
    public function contact(){
        return view("webpage.contact");
    }
    public function testimonial(){
        return view("webpage.testimonial");
    }

}
