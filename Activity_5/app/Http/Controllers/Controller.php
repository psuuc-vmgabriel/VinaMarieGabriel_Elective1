<?php

// pinapakita ang namespace ng controller upang maiwasan ang conflict sa ibang class
namespace App\Http\Controllers;

// Ina-import ang Request class mula sa Laravel upang magamit sa mga HTTP request
use Illuminate\Http\Request;

// unang Controller class
class Controller
{
    // Gumagawa ng public function na tinatawag na multiply na may dalawang input parameters ($num1 at $num2)
    public function multiply($num1, $num2)
    {
        // Sine-check kung ang $num2 ay zero upang maiwasan ang error sa multiplication
        if ($num2 == 0) {
            // Kung zero ang $num2, ibabalik ang JSON response na may error message at HTTP status code 400
            return response()->json(['error' => 'Cannot multiply by zero'], 400);
        }

        // Isinasagawa ang multiplication ng $num1 at $num2
        $result = $num1 * $num2;

        // Tinutukoy ang kulay ng text depende kung even (orange) o odd (blue) ang numero
        $value1Color = ($num1 % 2 == 0) ? 'orange' : 'blue';
        $value2Color = ($num2 % 2 == 0) ? 'orange' : 'blue';

        // Tinutukoy ang kulay ng background ng result box depende kung even (green) o odd (green) ang resulta
        $boxColor = ($result % 2 == 0) ? 'green' : 'green';

        // Ipinapasa ang mga variables sa view file na "welcome.blade.php" gamit ang compact function
        return view('welcome', compact('num1', 'num2', 'result', 'value1Color', 'value2Color', 'boxColor'));
    }
}
