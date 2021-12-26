<?php

namespace App\Http\Livewire;

use App\Models\livre;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class ListAnciensEmprunts extends Component
{    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshAnciensEmprunts' => '$refresh'];
    public function render()
    {        $allAbonne = livre::whereHas('abonnes', function ($query)  {
        $query->where('livre_abonne.status', '=', 'pending')->where('abonne_id','=',Session::get('abonne')->id);
    })->get();
        return view('livewire.list-anciens-emprunts',[
            'abonnePending'=>$allAbonne,
        ]);
    }
}
