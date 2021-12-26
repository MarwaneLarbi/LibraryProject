<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class Emprunter extends Component
{
    public function logout(Request $req){
        $abonne=abonne::find(Session::get('abonne')->id);
        DB::table('livre_abonne')
            ->where('abonne_id', Session::get('abonne')->id)
            ->where('status', 'draft')
            ->where('deleted_at', null)
            ->delete();
        DB::table('livre_abonne')
            ->where('abonne_id', Session::get('abonne')->id)
            ->where('deleted_at', null)
            ->where('status', 'retour')
            ->update(array('status' => 'done','updated_at' => DB::raw('NOW()')));
        session()->forget('abonne');
    }
    public function login(Request $req){
       // dd($req->all());
        $checkabonne=abonne::where('id',$req->id)->count();
        if($checkabonne==0)
        {
            return response()->json([
                'success' => false,
                'status'=>505,

            ]);
        }
        else
        {
            $abonne=abonne::find($req->id);
            if($abonne->status=='active')
            {
                session()->put('abonne', $abonne);
                return response()->json([
                    'success' => true,
                    'status'=>200,

                ]);
            }
            else{
                return response()->json([
                    'success' => false,
                    'status'=>500,

                ]);
            }
        }

    }
}
