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



    <table class="menus">
        <tr>
            <td><a href="main-moduls.php">Gyakorló mód</a></td>
            <td>Vizsga mód</td>
        </tr>
        <tr>
            <td><a href="tablak.php">Táblák gyakorlása</a></td>
            <td>Szituációs kérdések</td>
        </tr>
        <tr>
            <td colspan="2">Korábbi eredmények</td>
        </tr>
    </table>

<?php include_once('footer.php'); ?>
