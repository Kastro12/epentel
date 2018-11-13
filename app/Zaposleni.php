<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zaposleni extends Model
{
    protected $table = 'zaposleni';
    public $timestamps = false;
    public $primaryKey = 'id';

    public function bf()
    {
        return $this->belongsToMany('App\Bf','bf_zaposleni',
            'zaposleni_id','bf_id');
    }

}
