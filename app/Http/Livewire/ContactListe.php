<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class ContactListe extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.contact-liste',[
            'messages'=>DB::table('contact')
                ->orderBy('created_at','desc')
                ->paginate(10),
        ]);
    }
}
