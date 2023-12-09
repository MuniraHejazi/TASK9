<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello world </h1>
    @php
   $age = ["Peter"=>"35", "Ben"=>"37","Joe"=>"43"];
   @endphp
   @foreach($age as $x => $val) 
    @php
   echo "$x = $val<br>"; @endphp
  
  @endforeach
    
 
</body>
</html>