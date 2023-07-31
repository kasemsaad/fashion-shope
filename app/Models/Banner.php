<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['title','slug','description','photo','status'];
    public static function countActiveBanner(){
        $data=Banner::where('status','active')->count();
        if($data){
            return $data;
        }
        return 0;
    }
}
