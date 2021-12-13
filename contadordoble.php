<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador5040</title>
</head>
<body>
    <?php
    
    $contador = 0;
    
	while ($contador <=4){
        printf ("<UL>\n");

        $contador++;
        $doble=$contador*2;
        printf ("<LI> contador es : $contador el doble es : $doble </LI>\n" );
        
	    printf ("</UL>\n");

    }
        

    

    
        
     ?>
</body>
</html>