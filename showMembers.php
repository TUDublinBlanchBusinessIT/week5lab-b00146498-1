<?php 
include("Dbconn.php"):

$sql = "SELECT * from member";
$result = mysqli_query($conn, $sql);

echo "<TABLE border='1'>";

while($row = mysqli_fetch_assoc($result)) {
    $id=$row['id'];
    $fn=$row['firstname'];
    $sn=$row['surname'];
    echo "<TR><TD>$id</TD><TD>$fn</TD><TD>$sn</TD></TR>";
}
echo "</TABLE>";

mysqli_close($conn); 
?>