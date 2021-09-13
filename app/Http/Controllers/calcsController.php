<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcsController extends Controller
{
    public function word($num1,$function,$num2)
    {
        $sum = $num1 + $num2;
        $sub = $num1 - $num2;
        $mul = $num1 * $num2;
        $div = $num1 / $num2;

        if($function === 'addtion'){
            $function = $sum;
        }elseif($function === 'subtraction'){
            $function = $sub;
        }elseif($function === 'multiplication'){
            $function = $mul;
        }else{
            $function = $div ;
        }

        return view('message.word',
        [
        'num1'=>$num1,
        'function'=> $function,
        'num2'=> $num2
            ]);
    }
       
}
