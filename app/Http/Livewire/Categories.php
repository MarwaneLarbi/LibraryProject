<?php

namespace App\Http\Livewire;

use App\Models\category;
use Livewire\Component;
use Livewire\WithPagination;

class Categories extends Component
{
    use WithPagination;
    protected $listeners = ['refreshTableCategory' => '$refresh'];
    protected $paginationTheme = 'bootstrap';
    public $searchCategory;
    public function render()
    {
        return view('livewire.categories',[
            'categories'=>	category::orderBy('created_at','desc')->where(function($sub_query){
                $sub_query->where('name', 'like', '%'.$this->searchCategory.'%');
            })->paginate(10)
        ]);
    }
}
