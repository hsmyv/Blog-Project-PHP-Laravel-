<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    use HasFactory;
    protected $fillable = ['ders','haqqinda'];

    public function ders(){
        return $this->hasMany('App\Models\teacher');
        return $this->hasOne('App\Models\teacher')->where('muellim','Hesen'); //burada hesen adli muellimi tapir (ilk cixani)
    }
}
