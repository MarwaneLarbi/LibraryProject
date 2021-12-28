<?php

namespace App\Http\Livewire;

use App\Models\admin;
use Livewire\Component;
use Livewire\WithPagination;

class ListeGestionnaire extends Component

{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['refreshGestionnaireTable' => '$refresh'];
    public  $Options=null;

    public $searchgestionnaireTerm=null;
    public function render()
    {
        return view('livewire.liste-gestionnaire',[
            'gestionnaires'=> admin::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('nom', 'like', '%'.$this->searchgestionnaireTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('prenom', 'like', '%'.$this->searchgestionnaireTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('adresse', 'like', '%'.$this->searchgestionnaireTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('tel', 'like', '%'.$this->searchgestionnaireTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('email', 'like', '%'.$this->searchgestionnaireTerm.'%');
            })
                ->orwhere(function($sub_query){
                $sub_query->where('id', 'like', '%'.$this->searchgestionnaireTerm.'%');
            })->paginate(10)
        ]);
    }
}
