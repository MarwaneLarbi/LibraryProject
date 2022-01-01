<?php

namespace App\Http\Livewire;

use App\Models\abonne;
use App\Traits\sendSMS;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class DeleteAbonnes extends Component
{
    use sendSMS;
    public function delete($id){
        abonne::find($id)->delete();
        DB::table('_activities_abonne')
            ->
            where(DB::raw('abonne_id'), '=', $id)
            ->update(array('deleted_at' => now()));
        return response()->json([
            'status'=>200,
            'message'=>'category has been deleted'

        ]);
    }
    public function deleteselected(Request $req){
        $delete= abonne::find($req->id);
        abonne::find($req->id)->delete();
        $message='Bonjour '.$delete->nom.' '.$delete->prenom.
            '   votre Compte a été  supprimer le '.now();
        $number='+213'.$delete->tel;
        $this->sendMessage($message,$number);

        DB::table('_activities_abonne')
            ->
            where(DB::raw('abonne_id'), '=', $req->id)
            ->update(array('deleted_at' => now()));
        return response()->json([
            'status'=>200,
            'message'=>'category has been deleted'

        ]);

    }
    public function render()
    {
        return view('livewire.delete-abonnes');
    }
}
