
@foreach ($tlists as $count=>$ind)
<p>

<!-- show data -->
{{++$count."."." id: ".$ind->id." , "." name: ".$ind->name}}

<!-- delete -->
<form action="/todo/{{$ind->id}}" method="POST">
{{csrf_field()}}
{{method_field('DELETE')}}
<input type="submit" value="delete">
</form>

<!-- edit -->
<form action="/todo/{{$ind->id}}/edit" method="get">
{{csrf_field()}}
<input type="submit" value="Edit">


</form>

</p>
@endforeach

<h1>Insert new one!!</h1>

<form action="{{url('todo')}}" method="POST">
{{csrf_field()}}
<input type="text" placeholder="book title" name="name">
<input type="submit" value="send">
</form>
