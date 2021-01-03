<?php

namespace App\Http\Controllers;

use App\Mail\AccountConfirmation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class homeController extends Controller
{
    public function signup(Request $request)
    {
    	$this->validate($request,
    		[
    		'fullname' => 'required|string',
    		'email' => 'required|email|unique:users'
    	   ]);

        $mdp = Str::random(8);

    //dd($mdp);

        $user = User::create(
        	[
        		'fullname' => $request->fullname,
        		'email' => $request->email,
        		'password' => Hash::make($mdp),
            ]);
        Mail::to($request->email)->send(new AccountConfirmation($user,$mdp));
        session()->flash('message','Votre inscription a prise en compte. Veuillez verifier votre boite email pour confirmer');
       return back();

    }
}
