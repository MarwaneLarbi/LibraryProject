<?php

namespace App\Http\Livewire;

use App\Models\admin;
use Illuminate\Http\Request;
use Livewire\Component;

class EditGestionnaire extends Component
{
    public function getData($id){
        $gestionnaire=admin::find($id);
        return response()->json([
            'status'=>200,
            'gest'=> $gestionnaire,

        ]);
    }

    public function update(Request $req){
        $update=admin::find($req->_current_id);

        if ($req->gest_id!=$req->_current_id){
            $checkExisteUser = admin::where('id', $req ->gest_id)->count();
            if($checkExisteUser!=0){
                return response()->json([
                    'success'=>false,
                    'status'=>505,
                ]);
            }
            else{
                $update->id=$req->gest_id;
            }
        }
        $update->nom=$req->edit_gest_nom;
        $update->prenom=$req->edit_gest_prenom;
        $update->adresse=$req->edit_gest_adresse;
        $update->email=$req->edit_gest_email;
        $update->tel=$req->edit_gest_tel;
        $update->dateNaissence=$req->date_naissence;
        $update->save();
        return response()->json([
            'success'=>true,
            'status'=>200,
        ]);

    }
    public function editerProfile(Request $req){
        dd($req->all());
    }

    public function render()
    {
        return view('livewire.edit-gestionnaire');
    }
}
