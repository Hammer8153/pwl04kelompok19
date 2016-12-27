<?php   
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/function.php');


    if (isset($_POST['submit'])) {


        $user = $_POST["username"];
        $pass = $_POST["password"];
        $cpass = $_POST["confirm"];
        
        if ($user == "" or $pass == ""){
            $error = "Please don't leave the document blank.";
        }

        if ($pass != $cpass ){
            $error = "your password confirmation doesn't same";
        }

        if (!isset($error) && $_POST["address"] != "") {
            $error = "Your form submission has an error.";
        }
        if (!isset($error)) {
        $con = new user;
        $con->insert($user,$pass);

        header("Location: " . BASE_URL . "user/register.php?status=thanks");
        exit;
        }

    }


?><?php
$pageTitle = "register";
$section = "user";
if(isset($_SESSION['login'])){
header('location:' . BASE_URL . 'shoes');}
else if(!isset($_SESSION['login'])){

include(ROOT_PATH . 'inc/header.php'); 

?>
    <div class="section page">

        <div class="wrapper">

            <h1>Register</h1>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
                <p>Thanks for register, now you can shop all the way you like in our store!</p>
            <?php } else { ?>
            <?php
                if (!isset($error)) {   
                    echo '<p>Hey, wanna have one of our awesome shirt? Please register bellow.</p>';
                } else {
                        echo '<p class="message">' . $error . '</p>';
                }
            ?>
            <form method="post">
                <table>
                    <tr>
                        <th>
                            <label>Username</label>
                        </th>
                        <td>
                            <input required="required" type="text" name="username" id="username" \>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Password</label>
                        </th>
                        <td>
                            <input required="required" type="password" name="password" id="password" \>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Confirm Password</label>
                        </th>
                        <td>
                             <input required="required" type="password" name="confirm" id="confirm" \>
                        </td>
                    </tr>
                    <tr style="display: none;">
                        <th>
                            <label for="check">Check</label>
                        </th>
                        <td>
                            <input type="text" name="check" id="check">
                            <p>Humans : please leave this field blank.</p>
                        </td>
                    </tr>                           
                </table>
                <input type="submit" name="submit" id="submit" value="register">
            </form>

            <?php } ?>

        </div>
    
    </div>

<?php include (ROOT_PATH . 'inc/footer.php'); } ?>