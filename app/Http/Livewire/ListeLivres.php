<?php

namespace App\Http\Livewire;

use App\Models\Livre;
use Livewire\Component;

class ListeLivres extends Component
{
    public $searchBookTerm;
    public function render()
    {
        return view('livewire.liste-livres',[
            'Books'=>	Livre::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('titre', 'like', '%'.$this->searchBookTerm.'%');
            })->paginate(10)
        ]);
    }
}
