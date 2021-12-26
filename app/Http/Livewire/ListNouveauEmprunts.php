<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\livre;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Livewire\WithPagination;

class ListNouveauEmprunts extends Component
{
    use WithPagination;
    public $Options=null;
    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['refreshListNouveauEmprunts' => '$refresh'];
    public function delete($id){
        $abonne=abonne::find(Session::get('abonne')->id);
        DB::table('livre_abonne')
            ->where('abonne_id', Session::get('abonne')->id)
            ->where('livre_id', $id)
            ->where('status', 'draft')
            ->where('deleted_at', null)
            ->delete();

    }
    public function render()
    {
        $allAbonne = livre::whereHas('abonnes', function ($query)  {
            $query->where('livre_abonne.status', '=', 'draft')->where('abonne_id','=',Session::get('abonne')->id);
        })->get();
        return view('livewire.list-nouveau-emprunts',[
            'abonneDraft'=>$allAbonne,
        ]);
    }
}
