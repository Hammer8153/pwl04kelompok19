<?php   
require_once("../inc/config.php");
include(ROOT_PATH . 'inc/function.php');
$konek = mysql_connect("localhost","root","","medishop");


    if (isset($_POST['submit'])) {

        $name = $_POST["name"];
        $img = $_POST["img"];
        $price = $_POST["price"];
		$paypal = $_POST["paypal"];
        
        if ($name == "" or $img == "" or $price == "" or $paypal == ""){
            $error = "Please don't leave the document blank.";
        }

        if (!isset($error)) {
        $con = new admin;
        $con->insertproducts($name,$img,$price,$paypal);

        header("Location: " . BASE_URL . "admin/insert.php?status=done");
        exit;
        }

    }


?><?php
$pageTitle = "insert product";
$section = "admin";
if(isset($_SESSION['admin'])){
header('location:' . BASE_URL . 'shoes');}
else if(!isset($_SESSION['admin'])){

include(ROOT_PATH . 'inc/header.php'); 

?>
    <div class="section page">

        <div class="wrapper">

            <h1>Insert</h1>

            <?php if (isset($_GET["status"]) AND $_GET["status"] == "done") { ?>
                <p>Thanks for inserting!</p>
            <?php } else { ?>
            <?php
                if (!isset($error)) {   
                    echo '<p>Hey, wanna have one of our awesome shoes? Please register bellow.</p>';
                } else {
                        echo '<p class="message">' . $error . '</p>';
                }
            ?>
            <form method="post">
                <table>
                    <tr>
                        <th>
                            <label>name</label>
                        </th>
                        <td>
                            <input required="required" type="text" name="name" id="name" \>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>img</label>
                        </th>
                        <td>
                            <input required="required" type="img" name="img" id="img" \>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>price</label>
                        </th>
                        <td>
                            <input required="required" type="price" name="price" id="price" \>
                        </td>
                    </tr>
					<tr>
                        <th>
                            <label>paypal</label>
                        </th>
                        <td>
                            <input required="required" type="paypal" name="paypal" id="paypal" \>
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
                <input type="submit" name="submit" id="submit" value="insert">
            </form>

            <?php } ?>

        </div>
    
    </div>

<?php include (ROOT_PATH . 'inc/footer.php'); } ?>