<?php session_start(); include_once('header.php'); require_once('isloggedin.php'); ?>

<?php
// Initialize the session

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
                <input type="radio" id="opt1" name="opt"><span id="optt1"></span>
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
    <button id="next" onClick="nextQuestion()">Következő</button>
    <button id="check" onClick="checkAnswer()">Ellenőrzés</button>
    <h3><span id="actual">0</span> / <span id="question_number">0</span></h3>

<script src="questions.js"></script>
<script>
    var i = 0;
    generate(0);

    var optt1 = document.getElementById("optt1");
    var optt2 = document.getElementById("optt2");
    var optt3 = document.getElementById("optt3");

    var opt1 = document.getElementById("opt1");
    var opt2 = document.getElementById("opt2");
    var opt3 = document.getElementById("opt3");

    var actual = document.getElementById("actual");
    var question_number = document.getElementById("question_number");

    var kerdes = document.getElementById("question");
    var magyarazat = document.getElementById("magyarazat");

    magyarazat.style.display = "none";
    
    question_number.innerHTML = jsonData.length;
    actual.innerHTML = i + 1;


    
    function generate(index) {
        document.getElementById("question").innerHTML = jsonData[index].q;
        document.getElementById("optt1").innerHTML = jsonData[index].opt1;
        document.getElementById("optt2").innerHTML = jsonData[index].opt2;
        document.getElementById("optt3").innerHTML = jsonData[index].opt3;
        document.getElementById("magyarazat").innerHTML = jsonData[index].d;

        

    }

    function nextQuestion() {
        i++;
        generate(i);
        actual.innerHTML = i + 1;

        opt1.checked = false;
        opt2.checked = false;
        opt3.checked = false;

        opt1.parentElement.style.backgroundColor = "white";
        opt2.parentElement.style.backgroundColor = "white";
        opt3.parentElement.style.backgroundColor = "white";
        magyarazat.parentElement.style.backgroundColor = "white";
        magyarazat.style.display = "none";
        
    }

    function checkAnswer() {
        if ((opt1.checked == true) && (optt1.innerHTML == jsonData[i].a)) {
            opt1.parentElement.style.backgroundColor = "green";

        }
        else if (opt1.checked == true) {
            opt1.parentElement.style.backgroundColor = "red";

        }
        
        if ((opt2.checked == true) && (optt2.innerHTML == jsonData[i].a)) {
            opt2.parentElement.style.backgroundColor = "green";

        }
        else if (opt2.checked == true) {
            opt2.parentElement.style.backgroundColor = "red";

        }

        if ((opt3.checked == true) && (optt3.innerHTML == jsonData[i].a)) {
            opt3.parentElement.style.backgroundColor = "green";

        }
        else if (opt3.checked == true) {
            opt3.parentElement.style.backgroundColor = "red";
        }

        magyarazat.style.display = "block";
        magyarazat.parentElement.style.backgroundColor = "yellow";

        console.log("i: " + i);
    }
</script>

<?php include_once('footer.php'); ?>
