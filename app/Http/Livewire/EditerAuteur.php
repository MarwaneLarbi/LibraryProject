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
    public $image_path,$hasimage=false;

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
    public function store(Request $req){
        $auteurmodify=auteurs::find($req->id_auteur);
        if($req->hasFile('edit_auteur_photo')) {
            $image = $req->file('edit_auteur_photo');
            $image_name = $image->getClientOriginalName();
            $image -> move(public_path('/images/auteurs'), $image_name);
            $this->image_path = "/images/auteurs/".$image_name;
            $this->hasimage = true;
        }
        $auteur=auteurs::find($req->id_auteur);
        if ($auteur->fullname==$req->fullname_edit)
        {
            $auteurmodify->fullname=$req->fullname_edit;

        }
        else{

            $chek=auteurs::where('fullname',$req->fullname_edit)->first();
            if ($chek){
                return response()->json([
                    'success' => false,
                ]);
            }
            else{



                $auteurmodify->fullname=$req->fullname_edit;

            }
        }
        if ($req->description_edit!=null){

            if ($auteur->description!=$req->description_edit)
            {
                $auteurmodify->description=$req->description_edit;

            }
        }
        $auteurmodify->country=$req->country_edit;
        if ( $this->hasimage){
            $auteurmodify->photo= $this->image_path;
        }

        $auteurmodify->save();
        return response()->json([
            'success' => true,
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
