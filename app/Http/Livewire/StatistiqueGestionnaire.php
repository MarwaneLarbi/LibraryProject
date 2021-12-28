<?php

namespace App\Http\Livewire;

use App\Models\category;
use App\Models\livre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StatistiqueGestionnaire extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreStatistiqueGestTable' => '$refresh'];
    public function getData(Request $req){
        $categories=category::all();
        $books=livre::all();
        return $categories;

    }

}
