<!doctype html>
<html lang="en">
    <head>
        <title>JavaJam Coffee House</title>
        <meta charset=“utf-8”>
        <link rel="stylesheet" href="./css/style_001.css">
        <script src="./js/update.js"></script>

        <style>
        th {
            text-align: left;
        }

        input[type="checkbox"]{
            zoom: 1.2;
        }
        </style>
    </head>

    <body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "abcde12345";
    $dbname = "f31ee";

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='1'";
    $result = mysqli_query($db, $query);
    $drink1 = mysqli_fetch_assoc($result);

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='2'";
    $result = mysqli_query($db, $query);
    $drink2 = mysqli_fetch_assoc($result);

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='3'";
    $result = mysqli_query($db, $query);
    $drink3 = mysqli_fetch_assoc($result);

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='4'";
    $result = mysqli_query($db, $query);
    $drink4 = mysqli_fetch_assoc($result);

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='5'";
    $result = mysqli_query($db, $query);
    $drink5 = mysqli_fetch_assoc($result);

    //  echo <p> $drink["Productprice"]</p>;
    mysqli_close($db);
    ?>
        <div class="wrapper">
            <header>
                <img id="img_logo" src="./img/javajam_logo.PNG" alt="javajam_logo">
            </header>

            <nav id="navbar">
                <b>
                    <a href="index.html">Home</a> &nbsp;<br>
                    <a href="menu.php">Menu</a> &nbsp;<br>
                    <a href="music.html">Music</a> &nbsp;<br>
                    <a href="jobs.html">Jobs</a> &nbsp;<br>
                    <a href="update.php">Price Update</a> &nbsp;<br>
                    <a href="index.php">Sales Report</a> &nbsp;<br>

                </b>
            </nav>

            <div class="content">
                <h2>Click to generate daily sales report:</h2>

                <table id="" name="menu" >
                
                    <tr>
                        <td>
                            <input type="checkbox" class="control_field" id="enable_drink_1" name="drink_1_qnt" border="1" onclick="checkbox_drink_1()">
                        </td>
                       <th>
                       Total dollar sales by products
                       </th>
                    </tr>
                        
                    <tr>
                        <td>
                            <input type="checkbox" class="control_field" id="enable_drink_2" border="1" oninput="checkbox_drink_2()">
                        </td>
                        <th>
                        Sales quantities by product categories
                        </th>
                    </tr>


                </table>
            </div> 

            <footer>
                <small><i>Copyright &copy; 2014 JavaJam Coffee House</i></small><br>
                <small><a href="mailto:yan@liu.com">yan@liu.com</a></small>
            </footer>
        </div>
    </body>
</html>