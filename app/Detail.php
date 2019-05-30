<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    //Table Name
    protected $table = 'details';
    // Primary Key
    public $primaryKey = 'id';
    // foreignKey
    public $foreignKey = 'user_id';
    
    public function user(){
        return $this->belongsTo('APP\User');
    }
}
