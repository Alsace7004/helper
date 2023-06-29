<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Helper Package</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h5>{{ $message }}</h5>

        <div>
            @php
               $first = first_helper();
            @endphp
        </div>
        <div>
            @php 
                $second = second_helper();   
            @endphp
        </div>
        
        <p>Value of first helper function  : {{$first}}</p>
        <p>Value of second helper function  : {{$second}}</p>
       
    </div>
</body>
</html>