<!DOCTYPE html>
<html lang="en">
<head>
    <!-- nagpapakita na ang document na ito ay isang HTML5 file -->
    <meta charset="UTF-8">
    <!-- Sineset ang character encoding sa UTF-8 upang masupport ang iba't ibang language -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Ginagawang responsive ang webpage para sa iba't ibang laki ng screen -->
    <title>Multiplication Result</title>
    <!-- nagseset ang pamagat ng webpage na makikita sa tab ng browser -->

    <style>
        .result-box {
            /* siniset ang kulay ng background ng box batay sa $boxColor variable */
            background-color: {{ isset($boxColor) ? $boxColor : 'white' }};
            /* siniset ang kulay ng text sa loob ng box bilang white */
            color: white;
            /* Nagdaragdag ng padding sa loob ng kahon para lumaki ito ng kaunti */
            padding: 10px;
            /* siniset ang laki ng font sa loob ng kahon bilang 20px */
            font-size: 20px;
            /* Ginagawang inline-block para hindi ito sakupin ang buong linya */
            display: inline-block;
            /* Ginagawang kulay black ang border ng box */
            border: 2px solid black;         
            /* Naglalagay ng space sa kaliwa ng kahon para hindi ito dikit sa ibang text */
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <!-- Unang header ng webpage -->
    <h1>Activity 5: GIRLS</h1>

    <!-- chinicheck kung mayroong ipinasa na mga numero ($num1 at $num2) -->
    @if(isset($num1) && isset($num2))
        <!-- Ipinapakita ang unang value gamit ang kulay mula sa $value1Color -->
        <p>Value 1: <span style="color: {{ $value1Color }}">{{ $num1 }}</span></p>
        <!-- Ipinapakita ang pangalawang value gamit ang kulay mula sa $value2Color -->
        <p>Value 2: <span style="color: {{ $value2Color }}">{{ $num2 }}</span></p>
        <!-- Ipinapakita ang operator na "multiply" -->
        <p>Operator: multiply</p>
        
        <!-- Ipinapakita ang resulta na naka-highlight sa green na  kulay -->
        <p style="color:green">
            <strong>Result (Displayed in Green):</strong> 
            <!-- Ipinapakita ang resulta sa loob ng result-box na may background na isinet -->
            <span class="result-box">{{ $result }}</span>
        </p>
    @else
        <!-- Kung walang nilagay na mga value sa url, ipapakita ang mensahe na ito -->
        <p>Enter values in the URL to see the result. </p>
        <p> ex. /multiply/4/3</p>
    @endif

</body>
</html>
