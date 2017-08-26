<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<link rel="stylesheet" href="css.css">
<div class="container">
    <h2>Create a New Account</h2>
    <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
    <div class="regisFrm">
        <form action="userAccount.php" method="post">
            <input type="text" name="first_name" placeholder="first name" required="">
            <input type="text" name="last_name" placeholder="last name" required="">
            <input type="email" name="email" placeholder="Mail id" required="">
            <input type="text" name="phone" placeholder="phone" required="">
            <input type="password" name="password" placeholder="password" required="">
            <input type="password" name="confirm_password" placeholder="confirm password" required="">
            <div class="send-button">
                <input type="submit" name="signupSubmit" value="Sign Up">
            </div>
        </form>
    </div>
</div>