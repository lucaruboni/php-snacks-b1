<?php

/*
## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */


/* 
&& str_contains($_GET['userMail'], '.') && is_integer($_GET['userAge'])
 */


if (strlen($_GET['userName']) >= 3 | str_contains($_GET['userMail'], '.') | is_integer($_GET['userAge']) ) {
    echo $_GET['userName'];
    echo $_GET['userMail'];
    echo $_GET['userAge'];
    echo '------------';
    echo 'Accesso Riuscito';

}

else {
    echo 'Accesso NEGATO';
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">

        <h1 class="my-5 text-center">PHP BADWORD</h1>

        <form class="form-group" method="get">
            <label for="userName">UserName</label>
            <input class="form-control" name="userName" id="" placeholder="Write Here!">

            <label for="userMail">UserMail</label>
            <input class="form-control" name="userMail" id="" placeholder="">
            
            <label for="userAge">UserAge</label>
            <input class="form-control" name="userAge" id="" placeholder="">

            <button class="btn btn-primary my-5" type="submit">SUBMIT</button>


        </form>
    </div>
   </div>
</body>
</html>
