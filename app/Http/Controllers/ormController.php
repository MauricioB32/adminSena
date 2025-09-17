<?php

namespace App\Http\Controllers;

use App\Models\Apprentice;
use App\Models\User;
use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consulta(){

        $user = Apprentice::find(1);
        //$users = User::all();

        return $user->apprendice;
    }
}