<h1>View Page</h1>
<p>{{$name}}</p>
<p>{{rand()}}</p>
<p>{{$users[0]}}</p>
@if($users[0]=='a')
<p>a</p>
@else
<p>else</p>
@endif

<div>
    @for($i=0;$i< 10;$i++)
      <h3>{{$i}}</h3>
    @endfor
</div>

<div>
    @foreach($users as $us)
    <p>{{$us}}</p>
    @endforeach