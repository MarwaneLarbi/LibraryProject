<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mot_cle extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function mot_cle(){

        return $this->belongsTo(User::class);
    }
}
