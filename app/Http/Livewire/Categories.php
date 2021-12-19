<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    protected $listeners = ['refreshTable' => '$refresh'];
    protected $paginationTheme = 'bootstrap';
    public $searchTerm;
    public function render()
    {
        return view('livewire.categories',[
            'categories'=>	category::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('name', 'like', '%'.$this->searchTerm.'%');
            })->paginate(10)
        ]);
    }
}
