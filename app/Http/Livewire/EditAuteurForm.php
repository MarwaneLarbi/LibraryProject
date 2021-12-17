<?php

namespace App\Http\Livewire;

use App\Models\auteur as auteurs;
use App\Models\country;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditAuteurForm extends Component
{
    public $fullname ;
    public $country_edit;
    public $description_edit ;
    public $editing;
    public $data_auteur;
    public $id_auteur;
    use LivewireAlert;
    protected $listeners = ['data_edit_auteur'];
    public function data_edit_auteur($id){

        $this->id_auteur=$id;
        $dataauteur=auteurs::find($id);
        $this->fullname =$dataauteur->fullname;
        $this->id_auteur =$dataauteur->id;
        $this->country_edit =$dataauteur->country;
        $this->description_edit =$dataauteur->description;
        $this->editing=true;
        $this->data_auteur=$dataauteur;

    }
    public function render()
    {
        return view('livewire.edit-auteur-form',[
            'countries' => country::all(),
        ]);
    }
}
