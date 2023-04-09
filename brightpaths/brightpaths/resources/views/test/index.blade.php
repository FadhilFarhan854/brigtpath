<table border="1">
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Email</th>
        <th>pass</th>
</tr>
@foreach($account as $a)
<tr>
    <td>{{$a -> id}}</td>
    <td>{{$a -> nama}}</td>
    <td>{{$a -> email}}</td>
    <td>{{$a -> pass}}</td>
</tr>
    @endforeach
</table>

