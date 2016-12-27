<?php 
include ('../inc/config.php');
require_once(ROOT_PATH . "inc/function.php");

$user = new user();   
  
if (isset($_POST['login'])) { 
    $login = $user->login($_POST['username'], $_POST['password']); 
    if ($login) { 
        header('location:' . BASE_URL . 'shoes');
    }
}
?> 
<?php
$pageTitle = "login";
$section = "user";
include(ROOT_PATH . 'inc/header.php'); 

if(isset($_SESSION['login'])){
header('location:' . BASE_URL . 'shoes');}
else if(!isset($_SESSION['login'])){

?>
    
    <div class="section page">

        <div class="wrapper">

            <h1>Login</h1>

            <form method="post">

                <table>
                    <tr>
                        <th>
                            <label>Username</label>
                        </th>
                        <td>
                            <input type="text" name="username" id="username" required="required" \>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label>Password</label>
                        </th>
                        <td>
                            <input type="password" name="password" id="password" required="required" \>
                        </td>
                    </tr>
                </table>
                <input type="submit" name="login" id="login" value="login">
            </form>
        </div>
    
    </div>

<?php  include(ROOT_PATH . 'inc/footer.php'); }?>


