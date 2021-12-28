<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\admin;
use App\Traits\sendSMS;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class AddGestionnaire extends Component
{
    use sendSMS;
    public function store(Request $req){
        $check=admin::where('id',$req->gest_id)->count();
        if ($check!=0){
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
        $newGestionnaire->tel=$req->gest_tel;
        $newGestionnaire->adresse=$req->gest_adresse;
        $newGestionnaire->dateNaissence=$req->date_naissence;
        $newGestionnaire->role='Gestionnaire';
        $message='bienvenu '.$req->gest_nom.' '.$req->gest_prenom;
        $number='+213'.$req->gest_tel;
        $newGestionnaire->save();
        $this->sendMessage($message,'+213'.$req->gest_tel);
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
