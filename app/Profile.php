<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\History;
use Carbon\Carbon;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    public function histories()
    {
        return $this->hasMany('App\History');
    }
    
}
