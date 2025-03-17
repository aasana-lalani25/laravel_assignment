<h2> hotel booking</h2>
<form action="{{ route('hotels.store') }}" method="POST">
    @csrf

    <label for="name" >Name:</label>
    <input type="text" id="name" name="name" required>
    <br>

    <label for="checkindate" >checkin date :</label>
    <input type="text" id="checkindate" name="checkindate" required>
    <br>

    <label for="checkoutsate" >checkout date:</label>
    <input type="text" id="checkoutsate" name="checkoutsate" required>
    <br>

    <label for="roomtype">room type:</label>
    <select id="roomtype" name="roomtype" required>
        <option value="">Select room</option>
        <option value="single">single room</option>
        <option value="double">double room</option>
        <option value="family">family room</option>
    </select>
    <br>

    <button type="submit">BOOK ROOM</button>

</form>