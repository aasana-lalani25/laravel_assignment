<h2> Enter Software Detials</h2>
<form action="{{route('softwares.update',$software->id)}}" method="POST">

@csrf 
@method('PUT')
<label for="name">Product Name:</label>
<input type="text" id="name" name="name" required value="{{$software->name}}">
<br>
<br>

<label for="version" >Version </label>
<input type="text" id="version" name="version" required value="{{$software->version}}">
<br>
<br>

<label for="type" >Licence type: </label>
<select id="version" name="version" required> {{$software->type}}
    <option value="">Version Type:</option>
    <option value="V1">V1</option>
    <option value="V2">V2</option>
    <option value="V3">V3</option>
    <option value="V4">V4</option>
</select>
<br>
<br>

<label for="price" >Price </label>
<input type="text" id="price" name="price" required value="{{$software->price}}">
<br>
<br>

<button type="submit" >Update Software </button>

</form>