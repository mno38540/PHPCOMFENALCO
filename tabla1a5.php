<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php
$contador = 0;
    printf ("<table border=1><th colspan = 5 > los numeros dentro de contador son: \n");
	while ($contador <=4){
       

        $contador++;
        $doble=$contador*2;
        printf (
        "
            <td >
                $doble
            </td>
        \n" );
        
	   

    }
    printf ("</th><table>\n");
    ?>
</body>
</html>

