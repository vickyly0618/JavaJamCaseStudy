<?php
    $servername = "localhost";
    $username = "root";
    $password = "abcde12345";
    $dbname = "f31ee";
// Create dbection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check dbection
if (!$db) {
    die("dbection failed: " . mysqli_connect_error());
}
$price = $_POST['price'];
$name=$_POST['name'];
echo $name;

$query = "UPDATE javajam_menu SET itemPrice=$price WHERE itemShortName='$name'";

if (mysqli_query($db, $query)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($db);
}

mysqli_close($db);
?>
<html>
    <head>
    <script type = "text/javascript">
        alert("here");
</script>
    </head>
    <body>
  
    </body>
</html>
