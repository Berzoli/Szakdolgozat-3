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
            <td>Alapelvek a közlekedésben</td>
            
        </tr>
        <tr>
            <td>Autópálya, autóút</td>
            
        </tr>
        <tr>
            <td>Besorolás, bekanyarodás</td>
        </tr>
        <tr>
            <td>Elindulás előtti teendők</td>
        </tr>
        <tr>
            <td>Elindulás, haladás</td>
        </tr>
        <tr>
            <td>...</td>
        </tr>
    </table>

<?php include_once('footer.php'); ?>
