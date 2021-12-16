<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auteur extends Model
{
    use HasFactory;
  public function auteur(){

        return $this->belongsTo(User::class);
    }
}
