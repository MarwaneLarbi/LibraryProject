<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\admin;
use App\Traits\sendSMS;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class AddGestionnaire extends Component
{
    use sendSMS;
    public function store(Request $req){
        $check=admin::where('id',$req->gest_id)->count();
        $check2=admin::where('email',$req->gest_email)->count();

        if ($check!=0 || $check2!=0){
            return response()->json([
                'status'=>500,
                'success'=>false,

            ]);
        }
        $newGestionnaire=new admin();
        $newGestionnaire->id=$req->gest_id;
        $newGestionnaire->nom=$req->gest_nom;
        $newGestionnaire->prenom=$req->gest_prenom;
        $newGestionnaire->email=$req->gest_email;
        $newGestionnaire->password=Hash::make($req->password);
        $newGestionnaire->tel=$req->gest_tel;
        $newGestionnaire->adresse=$req->gest_adresse;
        $newGestionnaire->dateNaissence=$req->date_naissence;
        $newGestionnaire->photo='assets/media/avatars/blank.png';
        $newGestionnaire->role='Gestionnaire';
        $message='bienvenu '.$req->gest_nom.' '.$req->gest_prenom;
        $number='+213'.$req->gest_tel;
        $newGestionnaire->save();
        $this->sendMessage($message,'+213'.$req->gest_tel);


        //////gestionnaire as abonne
        $checkabonne=abonne::where('id',$req->gest_id)->count();
        if ($checkabonne==0) {
            $expiry_date = Carbon::now()->addYears(4);
            $newAbonne = new abonne();
            $newAbonne->id = $req->gest_id;
            $newAbonne->nom = $req->gest_nom;
            $newAbonne->prenom = $req->gest_prenom;
            $newAbonne->email = $req->gest_email;
            $newAbonne->tel = $req->gest_tel;
            $newAbonne->dateNaissence = $req->date_naissence;
            $newAbonne->package_id = '3';
            $newAbonne->status = 'active';
            $newAbonne->adresse = $req->gest_adresse;

            $newAbonne->endDate = $expiry_date->format('Y-m-d');
            $newAbonne->notification = 1;
            $newAbonne->save();
        }
        //////////////////
        return response()->json([
            'status'=>200,
            'success'=>true,
        ]);
    }
    public function render()
    {
        return view('livewire.add-gestionnaire');
    }
}
