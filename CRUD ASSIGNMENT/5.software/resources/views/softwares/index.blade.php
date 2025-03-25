<h2> Software Product detials</h2>
<a href="{{route('softwares.create)}}" >Add software </a>

<br>

<table border="1" cellpadding="8" >
    <thead>
        <tr>
            <th>Product Name</th>
            <th> Version</th>
            <th>Licence Type</th>
            <th>Price</th>
            <th>Action<th>
</tr>
</thead>

<tbody>
    @foreach($softwares as $software)
    <tr>
        <td>{{$software->name}}</td>
        <td>{{$software->version}}</td>
        <td>{{$software->type}}</td>
        <td>{{$software->price}}</td>
        <td>
             <a href="{{route('softwares.edit',$software->id ) }}">Edit</a>

            <form action="{{route('softwares.destroy', $software->id )}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('delete product?')">Delete</button>
</form>

</td>
</tr>
@endforeach
</tbody>
</table>
        
