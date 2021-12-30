<?php

namespace App\Models;

use Dyrynda\Database\Support\CascadeSoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class admin extends Model
{
    use HasFactory;
    use SoftDeletes,CascadeSoftDeletes;
    protected $fillable = [
        'nom',
        'prenom',
        'adresse',
        'tel',
        'email',
        'dateNaissence',
        'role',
        'password',
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
