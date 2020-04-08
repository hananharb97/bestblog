<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

        
    </head>
    <body>
       
    @foreach($task as $task)
      <h3>{{$task}} </h3> 
       @endforeach 
    </body>
</html>
