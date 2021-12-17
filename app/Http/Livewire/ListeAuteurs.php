<?php

namespace App\Http\Livewire;

use App\Models\country;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use App\Models\auteur as auteurs;
use Livewire\WithPagination;
use Yajra\DataTables\DataTables;

class ListeAuteurs extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshTable' => '$refresh'];

    public $description;
    public $ntastiw="hhhhhhhhhhhhhhhhhhhhhhhhhhh";
    public $searchTerm,$ontest,$auteur;

    public function editerAuteur($id_auteur){
        $dataauteur=auteurs::find($id_auteur);
        $this->auteur=$dataauteur;
        $this->dispatchBrowserEvent('showeditModel');
        $this->emit('data_edit_auteur', $id_auteur);
        $this->dispatchBrowserEvent('changetext');

    }


    public function ntestiw(){
        $this->ntastiw="wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";
        $this->dispatchBrowserEvent('ntawtiw2');

    }
    public function getDescription($id){
        $this->description=auteurs::where('id',$id)->first();
    }

    public function marwane($idd){
        $this->ontest="yawwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww";

        $this->ontest=$idd;
        $this->emit('domarwane',$idd);
        $this->dispatchBrowserEvent('ntawtiw');

    }
    //get auteur id
    public function render()
    {

        return view('livewire.liste-auteurs', [
            'countries' => country::all(),

            'auteurs'		=>	auteurs::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('fullname', 'like', '%'.$this->searchTerm.'%');
            })->orwhere(function($sub_query){
                 $sub_query->where('country', 'like', '%'.$this->searchTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('id', 'like', '%'.$this->searchTerm.'%');
            })->paginate(10)
        ]);
    }
}
