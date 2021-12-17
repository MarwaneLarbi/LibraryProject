<?php

namespace App\Http\Livewire;

use App\Models\auteur as auteurs;
use App\Models\country;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeleteAuteurForm extends Component
{
    use SoftDeletes;
    public $newid;
    public $selectedAuteur;
    protected $listeners =['domarwane'=>'domarwane' ];
    protected $dates = ['deleted_at'];
    public $auteurid213;
    public $test02=15;
    public $idauteur,$mydescription,$mycountry;
    public function domarwane($idd){
        $this->newid=$idd;
        $selectedAuteur=auteurs::find($idd);
        $this->selectedAuteur=$selectedAuteur;
        $this->mycountry=$selectedAuteur['country'];
        $this->mydescription=$selectedAuteur['description'];

    }
    public function deleteAuteur($id){
       auteurs::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'Auteur has been deleted'

        ]);
    }

    public function render()
    {
        return view('livewire.delete-auteur-form',[
                'countries' => country::all(),
                'marwanetest2'=>auteurs::find($this->newid),
                'maro'=>$this->mydescription,
            ]

        );
    }
}
