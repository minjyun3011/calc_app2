<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $operator, $num2)
    {
        $result = 0;
        if ($operator == 'addition') {
            $result = $num1 + $num2;
        } elseif ($operator == 'subtraction') {
            $result = $num1 - $num2;
        } elseif ($operator == 'multiplication') {
            $result = $num1 * $num2;
        } elseif ($operator == 'division') {
            $result = $num1 / $num2;
        } else {
            $result =  '正しく入力してください';
        }
        return view('message.calc', ['result' => $result]);
    }
}
