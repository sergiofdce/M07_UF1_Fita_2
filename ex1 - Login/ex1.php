<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fita2 - ex1</title>
</head>
<body>

    <form method="POST">

        <label for="userName">User: </label>
        <input type="text" name="userName" placeholder="Pepe123"/>

        <label for="userPassword">Password: </label>
        <input type="password" name="userPassword"/>

        <input type="submit"/>

    </form>

    <?PHP

        $userDict = ["Pepe"=>"pepe1234", "Pepa"=>"pepa1234"];

        $comprobacion = true;

        if(isset($_POST["userName"]))

        foreach($userDict as $user => $password){

            if( (isset($_POST["userName"]) && $user == $_POST["userName"]) && 
                (isset($_POST["userPassword"]) && $password == $_POST["userPassword"]) ){
                
                echo("login correcte");
                $comprobacion = true;
                break;
                
            }

            else{
                $comprobacion = false;
            }

        }

        if($comprobacion == false){
            echo("login incorrecte");
        }

    ?>
    
</body>
</html>