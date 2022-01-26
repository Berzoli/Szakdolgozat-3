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



    <table class="question_table">
        <tr>
            <td><span id="question"></span></td>
            
        </tr>
        <tr>
            <td>
                <input type="radio" id="opt1" name="opt"><span id="optt1">asd</span>
            </td>
            
        </tr>
        <tr>
            <td>
                <input type="radio" id="opt2" name="opt"><span id="optt2"></span>
            </td>
        </tr>
        <tr>
            <td>
                <input type="radio" id="opt3" name="opt"><span id="optt3"></span>
            </td>
        </tr>
        <tr>
            <td>
                <span id="magyarazat"></span>
            </td>
        </tr>
    </table>
    <button id="next" onClick="checkAnswer()">Következő</button>

<script src="questions.js"></script>
<script>
    var i = 0;
    generate(0);
    function generate(index) {
        document.getElementById("question").innerHTML = jsonData[index].q;
        document.getElementById("optt1").innerHTML = jsonData[index].opt1;
        document.getElementById("optt2").innerHTML = jsonData[index].opt1;
        document.getElementById("optt3").innerHTML = jsonData[index].opt1;
        document.getElementById("magyarazat").innerHTML = jsonData[index].d;

    }

    function checkAnswer() {
        generate(i);
    }
</script>

<?php include_once('footer.php'); ?>
