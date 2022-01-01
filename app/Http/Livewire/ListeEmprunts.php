<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class ListeEmprunts extends Component
{


    public function render()
    {
        $expiry_date = Carbon::now()->addMonths(1);
        DB::table('livre_abonne')
            ->where('deleted_at', null)
            ->update(array('status' => 'pending','created_at' => DB::raw('NOW()')));
        DB::table('livre_abonne')->whereDate('created_at', '>', $expiry_date)->update(['status' => 'inactive']);
        DB::table('abonnes')->whereDate('endDate', '>', now())->update(['status' => 'active']);

        return view('livewire.liste-emprunts');
    }
}
