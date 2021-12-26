<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class RetourEmprunt extends Component
{
    public function retour(Request $req){
        $abonne=abonne::find(Session::get('abonne')->id);
      //  $abonne->livres()->syncWithoutDetaching($req->id,array('status' => 'finish'));
        $ids = $abonne->livres()->allRelatedIds();
        DB::table('livre_abonne')
            ->where('abonne_id', Session::get('abonne')->id)
            ->where('livre_id', $req->id)
            ->where('deleted_at', null)
            ->update(array('status' => 'retours'));
        $abonne=abonne::find(Session::get('abonne')->id);

    }

}
