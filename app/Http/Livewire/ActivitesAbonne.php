<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class ActivitesAbonne extends Component
{
    use WithPagination;
    public $Options=null;
    public $SearchActivities=null;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshActivitiesAbonneTable' => '$refresh'];

    public function render()
    {

        return view('livewire.activites-abonne',[
            'activities'=>DB::table('_activities_abonne')
                ->where('abonne_id', Session::get('abonne')->id)
                ->when($this->Options,function ($query){
                    if ($this->Options=='active'){
                        $query->orderBy('status','asc');
                    }
                    elseif ($this->Options=='inactive'){
                        $query->orderBy('status','desc');
                    }
                    elseif($this->Options=='dateexp'){
                        $query-> orderBy('endDate','asc');
                    }

                })
                -> orderBy('date','desc')
                ->paginate(6)->fragment('activities')
        ]);
    }
}
