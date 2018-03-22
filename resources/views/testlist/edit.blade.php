<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
</head>
<body>
<h1> "Name Edition" </h1>


@foreach ($Tlists as $ind)
<form action="{{url('todo')}}/{{$ind->id}}/update" method="POST">
{{csrf_field()}}

<input type="text" placeholder='{{$ind->name}}' name="name">
<input type="submit" value="edit">

    @method('PUT')
</form>

@endforeach


</body>
</html>