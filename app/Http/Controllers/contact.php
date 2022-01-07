<?php

namespace App\Http\Controllers;

use App\Mail\LibraryUserNotification;
use App\Models\abonne;
use App\Models\admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class contact extends Controller{

    public function store(Request $req){
    //dd($req->all());
        DB::table('contact')->insert(
            [
                'name' => $req->name,
                'lastname' => $req->lastname,
                'phone'=>$req->phone,
                'email'=>$req->email,
                'subject'=>$req->subject,
                'message'=>$req->message,
            ]
        );
        return back()->with('fail', "Your Photo has been updeted");
    }
}
