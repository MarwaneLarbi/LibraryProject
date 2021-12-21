<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tag extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "tags";
    protected $fillable=['name','created_at','updated_at'];
    protected $hidden =['created_at','updated_at','pivot','deleted_at'];
    public $timestamps = true;
    public function livres()
    {
        return $this->belongsToMany(livre::class, 'livre_tag','tag_id');
    }
}
