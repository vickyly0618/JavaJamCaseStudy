<!doctype html>
<html lang="en">
    <head>
        <title>JavaJam Coffee House</title>
        <meta charset=“utf-8”>
        <link rel="stylesheet" href="./css/style_001.css">
        <script src="./js/menu.js"></script>

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
    echo $drink1["itemFullName"]." ".$drink1["itemShortName"]." ".$drink1["itemPrice"]."<br>";

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='2'";
    $result = mysqli_query($db, $query);
    $drink2 = mysqli_fetch_assoc($result);
    echo $drink2["itemFullName"]." ".$drink2["itemShortName"]." ".$drink2["itemPrice"]."<br>";

    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='3'";
    $result = mysqli_query($db, $query);
    $drink3 = mysqli_fetch_assoc($result);
    echo $drink3["itemFullName"]." ".$drink3["itemShortName"]." ".$drink3["itemPrice"]."<br>";


    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='4'";
    $result = mysqli_query($db, $query);
    $drink4 = mysqli_fetch_assoc($result);
    echo $drink4["itemFullName"]." ".$drink4["itemShortName"]." ".$drink4["itemPrice"]."<br>";



    $query = "SELECT itemFullName,itemShortName,itemPrice FROM javajam_menu WHERE itemId='5'";
    $result = mysqli_query($db, $query);
    $drink5 = mysqli_fetch_assoc($result);
    echo $drink5["itemFullName"]." ".$drink5["itemShortName"]." ".$drink5["itemPrice"]."<br>";


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
                <h2>Coffee at JavaJam</h2>

                <table id="tab_menu" name="menu" >
                    <tr>
                        <td></td>
                        <td></td>
                        <th>Qnt</th>
                        <th>Price</th>
                    </tr>
                    <tr>
                        <th>Just Java</th>
                        <td>Regular house blend, decaffeinated coffee, or flavor of the day. <br>
                        Endless Cup $<span id="drink_1_price" name="drink_1_price"><?php echo $drink1["itemPrice"]?></span></td>
                        <td>
                            <input type="text" class="qnt_input_field" id="drink_1_qnt" name="drink_1_qnt" border="1" oninput="CalculateTotalPrice_1()">
                        </td>

                        <td class="total_price_field">
                            $ <span id="drink_1_total_price" name="drink_1_total_price">0.00</span>
                        </td>
                    </tr>
                        
                    <tr>
                        <th>Cafe au Lait</th>
                        <td>House blended coffee infused into a smooth, steamed milk. <br>
                        <input type="radio" onchange="CalculateTotalPrice_2()" name="drink_2_price" id="drink_2_single">Single $<span id="drink_2_single_price"><?php echo $drink2["itemPrice"]?></span>  <input type="radio" onchange="CalculateTotalPrice_2()" name="drink_2_price" id="drink_2_double"> Double $<span id="drink_2_double_price"><?php echo $drink3["itemPrice"]?></span> </td>
                        <td>
                            <input type="text" class="qnt_input_field" id="drink_2_qnt" border="1" oninput="CalculateTotalPrice_2()">
                        </td>
                            
                        <td class="total_price_field">
                            $ <span id="drink_2_total_price" name="drink_2_total_price">0.00</span>
                        </td>
                    </tr>

                    <tr>
                        <th>Iced <br> Cappuccino</th>
                        <td>Sweetened espresso blended with icy-cold milk and served in a chilled glass. <br>
                            <input type="radio" onchange="CalculateTotalPrice_3()" id="drink_3_single" name="drink_3_price">Single $<span id="drink_3_single_price"><?php echo $drink4["itemPrice"]?></span> <input type="radio" onchange="CalculateTotalPrice_3()"name="drink_3_price" id="drink_3_double">Double $<span id="drink_3_double_price"><?php echo $drink5["itemPrice"]?></span></td>
                        <td>
                            <input type="text" class="qnt_input_field" id="drink_3_qnt" border="1" oninput="CalculateTotalPrice_3()">
                        </td>
                            
                        <td class="total_price_field">
                            $ <span id="drink_3_total_price" name="drink_3_total_price" >0.00</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4" >
                            <p id="total"><b>Total Price:  $<span id="sub_total" name="sub_total" >0.00</span></b> </p>
                        </td>
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