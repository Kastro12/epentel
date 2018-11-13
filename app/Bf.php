<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bf extends Model
{
    protected $table = 'bf';
    public $timestamps = false;
    public $primaryKey = 'id';

    public function zaposleni()
    {
        return $this->belongsToMany('App\Zaposleni','bf_zaposleni',
            'bf_id','zaposleni_id');
    }
}
