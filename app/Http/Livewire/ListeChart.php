<?php

namespace App\Http\Livewire;

use App\Models\category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ListeChart extends Component
{
    public $Year=null;
    public function Year(){
        dd($this->Year);
    }
    public function render()
    {
        return view('livewire.liste-chart',[
            'categoriesChart'=> category::all(),
            'Emprunts'=>DB::table('livre_abonne')
                ->where( DB::raw('YEAR(created_at)'), '=', '2021' )
                ->where( 'status', '=', 'done' )
                ->where('deleted_at', null)

                ->get()

        ]);
    }
}
