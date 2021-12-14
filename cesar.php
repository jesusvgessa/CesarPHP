<!-- Autor: Jesus Vazquez Gessa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="cesar.php">
        <h1>Introduce una cadena</h1><br>
        <p>Cadena: </p><input type="text" name="cadena"><br>
        <p>Numero: </p><input type="number" name="numero"><br><br>
        <input value="Enviar" type="submit">
    </form><br>

    <?php
        error_reporting(0);

        //variables
        $cad = $_POST['cadena'];
        $num = $_POST['numero'];
        $abc = "abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz";
        $long = strlen($cad);
        $cifrado = "";

        for($i=0;$i<$long;$i++){
            if($cad[$i]!=" "){
                $cifrado = $cifrado.$abc[stripos($abc,$cad[$i])+$num];
            }else{
                $cifrado = $cifrado." ";
            }//Fin Si
        }//Fin Para
        
        echo $cifrado;
    ?>

</body>
</html>