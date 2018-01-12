<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    public $timestamps = true;
    protected $fillable = ['name'];
    //function name is table in database
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
