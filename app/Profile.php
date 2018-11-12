<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    public static function find($id, $field = null){
        if($field){
            return self::where($field, '=', $id)->firstOrFail();
        }
        return self::where('id', '=', $id)->firstOrFail();
    }

    public function User(){
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['user_id', 'firstname', 'lastname', 'middlename', 'telephone', 'profile_photo', 'gender', 'country', 'state', 'lga'];
}
