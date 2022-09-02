<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HaqqindaController extends Controller
{
    public function index(){
        return 'haqqinda sehifesi';
        }
    public function insan($ad){
        return $ad." haqqinda melumat ";
    }
}
