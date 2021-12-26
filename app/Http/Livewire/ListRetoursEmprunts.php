<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\livre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class ListRetoursEmprunts extends Component
{
    protected $listeners = ['refreshAretoursEmprunts' => '$refresh'];

    public function annulerRetour(Request $req){
        $abonne=abonne::find(Session::get('abonne')->id);
        //  $abonne->livres()->syncWithoutDetaching($req->id,array('status' => 'finish'));
        $ids = $abonne->livres()->allRelatedIds();
        DB::table('livre_abonne')
            ->where('abonne_id', Session::get('abonne')->id)
            ->where('livre_id', $req->id)
            ->where('deleted_at', null)
            ->update(array('status' => 'pending'));
    }
    public function render()
    {
        $allAbonne = livre::whereHas('abonnes', function ($query)  {
            $query->where('livre_abonne.status', '=', 'retours')->where('abonne_id','=',Session::get('abonne')->id);
        })->get();
        return view('livewire.list-retours-emprunts',[
            'abonneretours'=>$allAbonne,
        ]);
    }
}
