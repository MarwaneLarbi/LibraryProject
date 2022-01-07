<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class RecentsEmprunts extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $day = Carbon::now()->format('d');
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');

        return view('livewire.recents-emprunts',[
            'todays'=>DB::table('_activities_abonne')->
            where(DB::raw('DAY(date)'), '=', $day)
                ->where('deleted_at', null)
                ->orderBy('created_at','desc')

                ->get(),
            'months'=>DB::table('_activities_abonne')->
            where(DB::raw('MONTH(date)'), '=', $month)
                ->where('deleted_at', null)
                ->orderBy('created_at')

                ->get(),
            'years'=>DB::table('_activities_abonne')->
            where(DB::raw('YEAR(date)'), '=', $year)
                ->where('deleted_at', null)
                ->orderBy('created_at')
                ->get(),
        ]);
    }
}
