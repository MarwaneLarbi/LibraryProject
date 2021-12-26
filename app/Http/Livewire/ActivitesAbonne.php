<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class ActivitesAbonne extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        return view('livewire.activites-abonne',[
            'activities'=>DB::table('_activities_abonne')
                ->where('abonne_id', Session::get('abonne')->id)
                ->orderBy('date',)
                ->paginate(5)->fragment('activities')
        ]);
    }
}
