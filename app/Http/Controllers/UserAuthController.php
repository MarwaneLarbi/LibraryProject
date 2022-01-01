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

class UserAuthController extends Controller
{

    public function login(){
        return view('auth.login');
    }
    public function logout(Request $request){
      if (session()->has('LoggedUser')){
          session()->pull('LoggedUser');
          return redirect('login');
      }

    }
    public function check(Request $req){
        $user=admin::where('id','=',$req->user_id)->first();
        if($user){
            if(Hash::check($req->password,$user->password))
            {
                $req->session()->put('LoggedUser',$user);
                return redirect('abonne');
            }
            else{
                return   back()->with('fail', "Mot pass incorrect");
            }

        }
        else{

            return   back()->with('fail', "Utilisateur n'existe pas");

        }
    }



    public function updateEmail(Request $req){
        $user_id=session()->get('LoggedUser')->id;
        $user=admin::where('id','=',$user_id)->first();
        if(Hash::check($req->confirmemailpassword,$user->password))
        {
            $email_admin=admin::where('email','=',$req->emailaddress)->count();
            $email_abonne=abonne::where('email','=',$req->emailaddress)->count();
            if ($email_admin==0 && $email_abonne==0)
            {
                $update=admin::find($user_id);
                $update->email=$req->emailaddress;
                $update->save();
                session()->pull('LoggedUser');
                $req->session()->put('LoggedUser',$update);
                $update=abonne::find($user_id);
                if ($update)
                {
                    $update->email=$req->emailaddress;
                    $update->save();
                }


                return back()->with('success', "Your email has been updeted");

            }
            return back()->with('fail', "Ce Email est déja Utilisé");
        }
        else{
            return   back()->with('fail', "Mot pass incorrect");
        }

    }
    public function updatePassword(Request $req){
        $user_id=session()->get('LoggedUser')->id;
        $user=admin::where('id','=',$user_id)->first();
        if(Hash::check($req->currentpassword,$user->password))
        {
            if (Hash::check($req->newpassword,$user->password))
            {
                return   back()->with('fail', "Mot pass utilisé");

            }
            $update=admin::find($user_id);
            $update->password=Hash::make($req->newpassword);
            $update->save();
            session()->pull('LoggedUser');
            return redirect('login')->with('success', "Your password has been updeted");
        }
        else{
            return   back()->with('fail', "Mot pass incorrect");
        }
    }
    public function updateProfile (Request $req){
        $user_id=session()->get('LoggedUser')->id;
        $update=admin::find($user_id);
        if ($update->nom==$req->nom && $update->prenom==$req->prenom && $update->adresse==$req->adresse &&$update->dateNaissence==$req->date_naissence&& $update->tel==$req->gest_tel)
        {   if($req->hasFile('photo')){
            $image = $req->file('photo');
            $image_name = $image -> getClientOriginalName();
            $image -> move(public_path('/images/Users'), $image_name);
            $image_path= "/images/Users/".$image_name;
            $update->photo=$image_path;
            $update->save();
            session()->pull('LoggedUser');
            $req->session()->put('LoggedUser',$update);
            return back()->with('success_profile', "Your Photo has been updeted");

        }
            return back()->with('fail_profile', "Aucune Modification detecté");
        }
        else{
            $update->nom=$req->nom;
            $update->prenom=$req->prenom;
            $update->adresse=$req->adresse;
            $update->tel=$req->gest_tel;
            $update->dateNaissence=$req->date_naissence;
            $update->save();
            session()->pull('LoggedUser');
            $req->session()->put('LoggedUser',$update);
            $update=abonne::find($user_id);
            $update->nom=$req->nom;
            $update->prenom=$req->prenom;
            $update->adresse=$req->adresse;
            $update->tel=$req->gest_tel;
            $update->dateNaissence=$req->date_naissence;
            $update->save();
            return back()->with('success_profile', "Your information has been updeted");


        }

    }

    public function SendToken (Request $req){
      //  dd($req->all());
        $user=admin::where('email',$req->email)->first();
        if($user)
        {

            $token = Str::random(64);
            $expiry_date = Carbon::now()->addDays(1);
            $user->remember_token=$token;
            $user->email_verified_at=$expiry_date;
            $user->save();
            $details = [
                'token' => $token,
                'expiry_date' => $expiry_date,
                'user'=>$user,
            ];
            \Mail::to($req->email)->send(new \App\Mail\LibraryUserResetPassword($details));

            return redirect('login')->with('success', "Email Has Been Sent  Check Your Inbox");

        }
        else{
            return redirect('login')->with('fail', "Utilisateur n'existe pas");
        }
        $details = [
            'nom' => 'Mail from ItSolutionStuff.com',
            'prenom' => 'This is for testing email using smtp',
            'email'=>'testmail'
        ];
/*        $token = Str::random(64);
        $expiry_date = Carbon::now()->addDays(1);

        DB::table('admins')->
        where('email', '=', $req->email)
            ->
        insert([
            'token' => $token,
            'email_verified_at' => $expiry_date
        ]);


        \Mail::to('marwane.dz2@gmail.com')->send(new \App\Mail\LibraryUserResetPassword($details));

        dd("Email is Sent.");*/

    }
      public function showResetPasswordForm($token) {
        $user=admin::where('remember_token',$token)->first();
        if($user){
            if($user->email_verified_at >now() )
            {
                return view('auth.NewPassword', ['token' => $token]);

            }
            else{

                return redirect('login')->with('fail', "Votre demende réinitialiser le mot de passe a été expiré");

            }
        }
        else{
            return redirect('login');
        }

      }
      public function submitResetPasswordForm(Request $request){
           // dd($request->all());
          $user=admin::where('remember_token',$request->token)->first();
          if (Hash::check($request->password,$user->password))
          {
              return   back()->with('fail-password-reset', "Mot pass utilisé");

          }
          $user->password=Hash::make($request->password);
          $user->email_verified_at=null;
          $user->save();
          session()->pull('LoggedUser');
          return redirect('login')->with('success', "Your password has been updeted");

      }
      public function LoginWithQr(Request $request){
          $checkExiste = admin::where('id', $request->id)->count();
          if($checkExiste!=0){
              $admin =admin::find($request->id);
              $request->session()->put('LoggedUser',$admin);
              return redirect('abonne');

          }
          else{
              return response()->json([
                  'success'=>false,
                  'status'=>505,
              ]);
          }
      }

}
