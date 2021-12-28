<?php

namespace App\Http\Livewire;

use App\Models\admin;
use App\Traits\sendSMS;
use Illuminate\Http\Request;
use Livewire\Component;

class DeleteGestionnaire extends Component
{
    use sendSMS;

    public function delete($id){
        admin::find($id)->delete();
        return response()->json([
            'status'=>200,
            'message'=>'gestionnaire has been deleted'

        ]);
    }
    public function deleteselected(Request $req){
        $delete= admin::find($req->id);
        admin::find($req->id)->delete();
        $message='Bonjour '.$delete->nom.' '.$delete->prenom.
            '   votre Compte a été  supprimer le '.now();
        $number='+213'.$delete->tel;
        $this->sendMessage($message,$number);
        return response()->json([
            'status'=>200,
            'message'=>'gestionnaire has been deleted'

        ]);

    }
    public function render()
    {
        return view('livewire.delete-gestionnaire');
    }
}
