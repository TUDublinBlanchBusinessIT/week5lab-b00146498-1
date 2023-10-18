<html>
    <body>
        <form method="POST" action="createNewBooking.php">
            <?PHP include 'createMemberDropdown.php';?>
            
            Booking Date: <input type="date" name="bookingDate"/><br>
            Start Time: <input type="time" name="startTime"/><br>
            End Time: <input type="time" name="endTime"/><br>
            courtID: <input type="text" name="courtID"/><br>
            <input type="submit">
        </form>
    </body>
</html>