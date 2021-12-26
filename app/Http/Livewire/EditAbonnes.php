<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\package;
use Carbon\Carbon;
use DateTime;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EditAbonnes extends Component
{
    public function update(Request $req){
        $update=abonne::find($req->edit_abonne_current_id);

        if ($req->edit_abonne_id!=$req->edit_abonne_current_id){
        $checkExisteAbonne = abonne::where('id', $req ->edit_abonne_id)->count();

          if($checkExisteAbonne!=0){
            return response()->json([
                'success'=>false,
                'status'=>505,
            ]);
        }
          else{
              $update->id=$req->edit_abonne_id;
          }
       }
        $update->nom=$req->edit_abonne_nom;
        $update->prenom=$req->edit_abonne_prenom;
        $update->email=$req->edit_abonne_email;
        $update->tel=$req->edit_abonne_tel;
        $update->dateNaissence=$req->edit_date_naissence;
        $update->save();
        return response()->json([
            'success'=>true,
            'status'=>200,
        ]);

    }

    public function getData($id){
        $abonne=abonne::find($id);
        return response()->json([
            'status'=>200,
            'abonne'=> $abonne,

        ]);
    }

    public function update_package(Request $req){
        $months=0;
        $update=abonne::find($req->update_abonne_id);
        $date=null;
        if (new DateTime($update->endDate)>now()){
            $date = new DateTime($update->endDate);
        }
        else
        {
            $date=now();
        }
        switch ($req->update_abonne_abonnement){
            case 11:
                $months = 1;
                $date->modify('+1 month');

                break;
            case 12:
                $date->modify('+3 month');
                break;
            case 13:
                $date->modify('+12 month');
                break;

        }

        $update->package_id =$req->update_abonne_abonnement;
        $update->endDate=$date;
        $update->save();
        return response()->json([
            'status'=>200,

        ]);

    }

    public function render()
    {
        return view('livewire.edit-abonnes',[
            'packages'=>package::all(),
        ]);
    }
}
