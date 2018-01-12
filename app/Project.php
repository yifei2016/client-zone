<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    public $timestamps = true;
    protected $fillable = ['name','type','link','client_id','status'];
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
