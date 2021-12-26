<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Models\category;
use App\Models\livre;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class AddEmprunts extends Component
{

    public function store(Request $req){
        $abonne=abonne::find(Session::get('abonne')->id);
        $date =new Date();
        if(isset($req->new_ids)){
        foreach ($req->new_ids as $id){
            DB::table('livre_abonne')
                ->where('abonne_id', Session::get('abonne')->id)
                ->where('livre_id', $id)
                ->where('deleted_at', null)
                ->update(array('status' => 'pending','created_at' => DB::raw('NOW()')));
            $abonne->activites()->attach($id,array('status' => 'active','date'=>now()->format('Y-m-d H:i:s')));

        }
        }
        if(isset($req->retour_ids)){

            foreach ($req->retour_ids as $id){
            DB::table('livre_abonne')
                ->where('abonne_id', Session::get('abonne')->id)
                ->where('livre_id', $id)
                ->where('deleted_at', null)
                ->update(array('status' => 'done','updated_at' => DB::raw('NOW()')));
                $abonne->activites()->attach($id,array('status' => 'inactive','date'=>now()->format('Y-m-d H:i:s')));

            }
        }}


        public function addToTable(Request $req){
            $check=livre::where('id',$req->id)->count();
            if ($check!=0){
                $abonne=abonne::find(Session::get('abonne')->id);
                $abonne->livres()->attach($req->id,array('status' => 'draft'));


                return response()->json([
                    'status'=>200,
                    'success'=>true,

                ]);
            }
            else{
                return response()->json([
                    'status'=>500,
                    'success'=>false,


                ]);
            }
        }

}
