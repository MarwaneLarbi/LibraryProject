<?php

namespace App\Http\Livewire;

use App\Models\livre;
use Livewire\Component;
use Livewire\WithPagination;

class ListeLivres extends Component
{
    protected $listeners = ['refreshBookTable' => '$refresh'];
    public $searchBookTerm;
    use WithPagination;

    public function render()
    {
        return view('livewire.liste-livres',[
            'Books'=>	livre::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('titre', 'like', '%'.$this->searchBookTerm.'%');
            })->paginate(10)
        ]);
    }
}
