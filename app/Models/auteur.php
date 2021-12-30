<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class auteur extends Model
{
    use HasFactory;
    use SoftDeletes,CascadeSoftDeletes;

    public function auteur(){

        return $this->belongsTo(User::class);
    }
}
