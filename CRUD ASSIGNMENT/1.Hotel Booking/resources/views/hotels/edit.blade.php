<h2> edit booking</h2>
<form action="{{ route('hotels.update',$hotel->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name" >Name:</label>
    <input type="text" id="name" name="name"  value="{{ $hotel->name }}">
    <br>

    <label for="checkindate" >checkin date :</label>
    <input type="text" id="checkindate" name="checkindate" required  value="{{ $hotel->checkindate }}">
    <br>

    <label for="checkoutsate" >checkout date:</label>
    <input type="text" id="checkoutsate" name="checkoutsate" required  value="{{ $hotel->checkoutsate }}">
    <br>

    <label for="roomtype">room type:</label>
    <select id="roomtype" name="roomtype" required  valu1="{{ $hotel->roomtype }}">
        <option value="">Select room</option>
        <option value="single">single room</option>
        <option value="double">double room</option>
        <option value="family">family room</option>

    </select>
    <br>

    <button type="submit">EDIT DETAILS</button>

</form>