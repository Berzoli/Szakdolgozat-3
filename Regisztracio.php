<?php 
// config fájllal egyutt
require_once "config.php";

//valtozok definialasa es ures ertekek megadasa hozza
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

//adatok kuldese, ha
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	//valid felhasznalonev kell
	if (empty(trim($_POST["felhasznalonev"]))) {
		$username_err = "Adj meg egy felhasznalonevet!";
	} elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["felhasznalonev"]))) {
		$username_err = "A felhasznalonev csak betuket, szamokat tartalmazhat!";
	}
	else{
		//Select elokeszitese
		$sql = mysqli_prepare($link, $sql)) {
		// parameterek bindelese
		mysqli_stmt_bind_param($stmt, "s", $param_username);

		//parameterek beallitasa
		$param_username = trim($_POST["felhasznalonev"]);

		if (mysqli_stmt_execute($stmt)) {
				msqli_stmt_store_result($stmt);

				if (mysqli_stmt_num_rows($stmt) == 1) {
					$username_err = "Ez a felhasznalonev mar foglalt!";
				} else {
					$username = trim($_POST["felhasznalonev"]);
				}
			} else {
				echo "Valami elromlott. Probald ujra kesobb.";
			}

			msqli_stmt_close($stmt);
		}
	}


	//Jelszo ellenorzese

	if(empty(trim($_POST["jelszo"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["jelszo"])) < 6){
        $password_err = "A jelszonak legalabb 6 karakter hosszunak kell lennie.";
    } else{
        $password = trim($_POST["jelszo"]);
    }
    
    // Jelszo ujra ellenorzese
    if(empty(trim($_POST["jelszo_ujra"]))){
        $confirm_password_err = "Erositsd meg a jelszavad!";     
    } else{
        $confirm_password = trim($_POST["jelszo_ujra"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Nem egyezik a jelszo.";
        }
    }
    
    // adatbazisba feltoltes elott lecsekkolja meg van-e minden
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // adatok feltoltesenek elokeszitese
        $sql = "INSERT INTO felhasznalo (felhasznalonev, jelszo) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // parameterek beallitasa
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // jelszo hash-t general
            
            // megprobalja feltolteni
            if(mysqli_stmt_execute($stmt)){
                // visszater a login oldalra
                header("location: login.php");
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // lezarja az stmt-t
            mysqli_stmt_close($stmt);
        }
    }
    
    // lezarja a kapcsolatot
    mysqli_close($link);
}




 ?>