<?php 
include ('../inc/config.php');
require_once(ROOT_PATH . "inc/function.php");

 $admin = new admin();

if (isset($_POST['login'])) { 
    $login = $admin->admlogin($_POST['uname'], $_POST['passwd']); 
    if ($login) { 
        header('location:' . BASE_URL . 'admin/user.php');}
    } else {
        echo "login failed";
    } 

?> 
<?php
$pageTitle = "login";
$section = "admin";
include(ROOT_PATH . 'inc/header.php'); 

if(isset($_SESSION['admin'])){
header('location:' . BASE_URL . 'admin/user.php');}
else if(!isset($_SESSION['admin'])){

?>
    
    <div class="section page">

        <div class="wrapper">

            <h1>Register</h1>

            <form method="post">

                <table>
                    <tr>
                        <th>
                            <label>Username</label>
                        </th>
                        <td>
                            <input type="text" name="uname" id="uname" required="required" \>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Password</label>
                        </th>
                        <td>
                            <input type="password" name="passwd" id="passwd" required="required" \>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="login" id="login" value="login">
            </form>
        </div>
    
    </div>

<?php  include(ROOT_PATH . 'inc/footer.php'); }?>


