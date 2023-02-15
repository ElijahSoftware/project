<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Les</title>
</head>
<body>
    <ul>
        @foreach ($opdracht as $taak)
            <li>
               <a href="/taken/ {{$taak->id }}"> 
                {{$taak ->body}}
            </a>
            </li>    
        @endforeach
    </ul>
</body>
</html>