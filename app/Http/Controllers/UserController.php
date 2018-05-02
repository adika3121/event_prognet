<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(){
    	if($req->file('img_profile')){
            $image = $req->file('img_profile');
            $filename = time().'.'.$image->getClientOriginalExtension();
            $destination = public_path('img/users');
            $image->move($destination, $filename);
            $req->img_profile = $filename;
            Auth::user()->update([
                'name' => $req['name'],
                'email' => $req['email'],
                'img_profile' => $filename, 
                'gender' => $req["gender"], 
                'birthday' => $req["birthday"], 
                'address' => $req["address"]
            ]);
        } else {
            Auth::user()->update($req->all());
        }
        
        return redirect('/profile')->with('success', 'Profil berhasil diupdate');
    }
}
