<?php

namespace App\Http\Livewire;

use App\Models\auteur as auteurs;
use Livewire\Component;

class TableAuteurs extends Component
{    public $searchTerm;

    public function render()
    {
        return view('livewire.table-auteurs', [
            'auteurs'=>	auteurs::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('fullname', 'like', '%'.$this->searchTerm.'%');
            })->paginate(10)
        ]);
    }
}
