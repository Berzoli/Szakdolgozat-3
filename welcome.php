<?php session_start();include_once('header.php');    
        require_once('isloggedin.php'); ?>

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
