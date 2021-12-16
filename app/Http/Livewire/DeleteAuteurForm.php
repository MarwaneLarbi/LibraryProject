<?php

namespace App\Http\Livewire;

use App\Models\auteur as auteurs;
use Livewire\Component;

class DeleteAuteurForm extends Component
{   public $newid;
    public $marwane;
    public $idauteur,$description,$country;
    public function marwane($idAuteur){
/*        $this->newid=$idAuteur;
        $aut = auteurs::where('id',$this->newid)->get();
        $this->idauteur=$aut->id;
        $this->country=$aut->country;
        $this->description=$aut->description;*/

    }
    public function render()
    {
        return view('livewire.delete-auteur-form'

        );
    }
}
