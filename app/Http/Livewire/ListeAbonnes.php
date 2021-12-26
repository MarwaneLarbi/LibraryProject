<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\package;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ListeAbonnes extends Component
{
    use WithPagination;
    public $Options=null;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshAbonneTable' => '$refresh'];
    public $searchabonneTerm=null;
    public function render()
    {
/*        return view('livewire.liste-abonnes',[
            'abonnes'		=>	abonne::when($this->Options,function ($query){
        if ($this->Options=='active'){
            $query->where('status',$this->Options);
        }
        elseif ($this->Options=='inactive'){
            $query->where('status',$this->Options);
        }
        elseif($this->Options=='dateexp'){
            $query-> orderBy('endDate','desc');
        }
         })->paginate(10)
        ]);*/


        DB::table('abonnes')->whereDate('endDate', '<', now())->update(['status' => 'inactive']);
        DB::table('abonnes')->whereDate('endDate', '>', now())->update(['status' => 'active']);

        return view('livewire.liste-abonnes', [
            'packages'=> package::all(),
            'abonnes' => abonne::
                when($this->Options,function ($query){
                    if ($this->Options=='active'){
                        $query->orderBy('status','asc');
                    }
                    elseif ($this->Options=='inactive'){
                        $query->orderBy('status','desc');
                    }
                    elseif($this->Options=='dateexp'){
                        $query-> orderBy('endDate','asc');
                    }
                })->
            where(function($sub_query){
                $sub_query->where('nom', 'like', '%'.$this->searchabonneTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('prenom', 'like', '%'.$this->searchabonneTerm.'%');
            })->orwhere(function($sub_query){
                $sub_query->where('id', 'like', '%'.$this->searchabonneTerm.'%');
            })->paginate(10)
        ]);

    }
}
