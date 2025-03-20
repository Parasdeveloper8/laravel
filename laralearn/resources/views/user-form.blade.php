<div>
    <h1>User Form</h1>
    @if($errors->any())
    @foreach($errors->all() as $error)
    <div style='color:red'>
        {{$error}}
    </div>
    @endforeach
    @endif
    <form action="/addUser" method="post">
        @csrf
        <input type="text" name="name"/>
        <span>@error('name'){{$message}}@enderror</span>
        <input type="email" name="email"/>
        <span>@error('email'){{$message}}@enderror</span>
        <button>Submit</button>
</form>
</div>
