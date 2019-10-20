
<!doctype html>
<html lang="en">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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

    // echo $drink5["itemFullName"]." ".$drink5["itemShortName"]." ".$drink5["itemPrice"]."<br>"
    mysqli_close($db);
    ?>

    <head>
        <title>JavaJam Coffee House</title>
        <meta charset=“utf-8”>
        <link rel="stylesheet" href="./css/style_001.css">

        <style>
            #tab_menu td:first-child {
                background-color: #f5f5dc;
            }
            .control_field {
                border: 1.5px solid black;
                background-color: rgb(229,218,193);
                zoom: 1.3;
            }
            #update_form {
                width: 90%;
                margin: 0;
            }
          
        </style>

    <script type = "text/javascript">
        function checkbox_drink_1() {
            var flag_1 = document.getElementById("enable_drink_1").checked;

            if (flag_1) {
                document.getElementById("drink_1_price").disabled = false;
            }
            else {
                document.getElementById("drink_1_price").innerHTML= <?php echo $drink1["itemPrice"];?>;
                document.getElementById("drink_1_price").disabled = true;
                var price=document.getElementById("drink_1_price").value;
                alert(price);
                var name="java";
                alert(name);

                console.log(price);

                $.ajax({
                url: "index.php",
                method: "POST",
                data: { "price": price,"name":name}
                })
            }
        }

        function checkbox_drink_2() {
            var flag_1 = document.getElementById("enable_drink_2").checked;

            if (flag_1) {
                document.getElementById("drink_2_single_price").disabled = false;
                document.getElementById("drink_2_double_price").disabled = false;

            }
            else {
                document.getElementById("drink_2_single_price").disabled = true;
                document.getElementById("drink_2_double_price").disabled = true;

            }
        }

        function checkbox_drink_3() {
            var flag_1 = document.getElementById("enable_drink_3").checked;

            if (flag_1) {
                document.getElementById("drink_3_single_price").disabled = false;
                document.getElementById("drink_3_double_price").disabled = false;
            }
            else {
                document.getElementById("drink_3_single_price").disabled = true;
                document.getElementById("drink_3_double_price").disabled = true;
            }
        }
    </script>
    </head>

    <body>
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
                <h2>Coffee at JavaJam</h2>
                <table id="tab_menu" name="menu" >
                    <tr>
                        <td>
                            <input type="checkbox" class="control_field" id="enable_drink_1" name="drink_1_qnt" border="1" onclick="checkbox_drink_1()">
                        </td>

                        <th>Just Java</th>
                        <td>Regular house blend, decaffeinated coffee, or flavor of the day. <br>
                        Endless Cup $<input type="text" class="price_input_field"id="drink_1_price" name="drink_1_price" value=<?php echo $drink1["itemPrice"];?> disabled></td>
                    </tr>
                        
                    <tr>
                        <td>
                            <input type="checkbox" class="control_field" id="enable_drink_2" border="1" oninput="checkbox_drink_2()">
                        </td>

                        <th>Cafe au Lait</th>
                        <td>House blended coffee infused into a smooth, steamed milk. <br>
                        Single $ <input type="text" class="price_input_field"  id="drink_2_single_price" value=<?php echo $drink2["itemPrice"];?> disabled> Double $<input type="text" class="price_input_field" disabled id="drink_2_double_price" value=<?php echo $drink3["itemPrice"];?>> </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="checkbox" class="control_field" id="enable_drink_3" border="1" oninput="checkbox_drink_3()">
                        </td>

                        <th>Iced <br> Cappuccino</th>
                        <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass. <br>
                        Single $<input type="text" class="price_input_field" id="drink_3_single_price" disabled value=<?php echo $drink4["itemPrice"];?>> Double $<input type="text" class="price_input_field" id="drink_3_double_price" disabled value=<?php echo $drink5["itemPrice"];?>></td>
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