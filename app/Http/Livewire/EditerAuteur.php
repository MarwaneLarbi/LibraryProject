<?php

namespace App\Http\Livewire;

use App\Models\auteur as auteurs;
use App\Models\country;
use Illuminate\Http\Request;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Illuminate\Http\Response;

class EditerAuteur extends Component
{
    public $fullname;
    public $mycountry;
    public $country_edit;
    public $description_edit ;
    public $editing;
    public $data_auteur;
    public $id_auteur;
    use LivewireAlert;
    protected $listeners = ['data_edit_auteur'];
    public function editer($id){
        $student = auteurs::find($id);
        $this->mycountry=$student->country;
        if($student)
        {
            return response()->json([
                'status'=>200,
                'student'=> $student,
            ]);
        }
        else
        {
            return response()->json([
                'status'=>404,
                'message'=>'No Student Found.'
            ]);
        }
    }
    public function Check(Request $req){
        $fullname = auteurs::where('fullname', $req ->fullname_edit)->count();
        if ($fullname!=0){
            return response()->json([
                'status'=>505,
                'message'=>'Auteur deja  Exist'

            ]);
        }
        else{
            $auteurcheck=auteurs::find($req->id_auteur);
            $checkfullname=$auteurcheck->fullname==$req->fullname_edit;
            $checkCountry=$auteurcheck->country==$req->country_edit;

            if ($req->description_edit==NULL){
                $checkDesc=true;
            }
            else{
                if ($req->description_edit==$auteurcheck->description)
                {
                    $checkDesc=true;
                }
                else{
                    $checkDesc=false;

                }
            }
            if ($checkfullname&&$checkCountry&&$checkDesc){
                return response()->json([
                    'status'=>404,
                    'message'=>'Aucune Mofification detected'
                ]);

            }
            else{
                return response()->json([
                    'status'=>200,
                    'message'=>'we can edit'
                ]);
            }
        }






    }
    public function store(Request $req){
        $auteurmodify=auteurs::find($req->id_auteur);
        $auteurmodify->fullname=$req->fullname_edit;
        $auteurmodify->country=$req->country_edit;
        if ($req->description_edit!=NULL){
            $auteurmodify->description=$req->description_edit;
        }
        $auteurmodify->save();
        return response()->json([
            'status'=>200,
            'message'=>'Auteur Edited'
        ]);

    }

    public function data_edit_auteur($id){

        $this->id_auteur=$id;
        $dataauteur=auteurs::find($id);
        $this->fullname =$dataauteur->fullname;
        $this->id_auteur =$dataauteur->id;
        $this->country_edit =$dataauteur->country;
        $this->description_edit =$dataauteur->description;
        $this->data_auteur=$dataauteur;
        dd("wow");


    }
    public function render()
    {
        return view('livewire.editer-auteur',
        [
            'countries' => country::all(),
        ]);
    }
}
