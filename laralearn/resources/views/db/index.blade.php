<h1>Data</h1>
<table>
    <tr>
        <td>Name</td>
        <td>Email</td>
</tr>
<tr>
    @foreach($users as $user)
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    @endforeach
</tr>
</table>