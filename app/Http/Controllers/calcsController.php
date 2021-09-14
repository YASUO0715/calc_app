<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcsController extends Controller
{
    public function word($num1, $function, $num2)
    {

    if(
        $function 
        === 'addtion'
        ){
        $function = $num1 + $num2;
    }elseif(
        $function 
        === 'subtraction'
        ){
        $function = $num1 - $num2;
    }elseif(
        $function 
        === 'multiplication'
        ){
        $function = $num1 * $num2;
    }else
    {
        $function = $num1 / $num2;
    }

        return view('message.word',
        [
        'function'=> $function,
            ]);
    }
    
}
