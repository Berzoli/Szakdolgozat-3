<?php include_once('header.php'); ?>

<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>



    <table class="main-modul-container">
        <tr>
            <a href="modul1.php"></a><td>KRESZ jogszabályok</td>
            
        </tr>
        <tr>
            <td>Kiemelt forgalmi helyzetek motorosoknak</td>
            
        </tr>
        <tr>
            <td>Közlekedési ismeretek motorosoknak</td>
        </tr>
        <tr>
            <td>Közúti jelzések</td>
        </tr>
        <tr>
            <td>Szerkezeti és üzemeltetési ismeretek motorosoknak</td>
        </tr>
        <tr>
            <td>Vezetéselmélet motorosoknak</td>
        </tr>
    </table>

<?php include_once('footer.php'); ?>
