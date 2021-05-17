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
        //php
        //paragrafo iniziale
        $paragrafo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita voluptate, sapiente enim facere magni earum laudantium omnis repellat laboriosam aut, neque delectus. Distinctio ea voluptatibus veniam accusantium eligendi vitae quae!';

        //parola censurata
        $badword = $_GET['badword'];

        //paragrafo con parola censurata
        $new_paragrafo = str_ireplace( $badword, '***', $paragrafo );
    ?>

    <!--paragrafo iniziale-->
    <h3>Paragrafo</h3>
    <p><?php echo $paragrafo; ?></p>

    <!--lunghezza paragrafo-->
    <h3>Lunghezza paragrafo</h3>
    <div><?php echo strlen($paragrafo) ?></div>

    <!--paragrafo con parola censurata--> 
    <h3>Paragrafo con parola censurata</h3>
    <p> <?php echo $new_paragrafo; ?></p>

    <!--lunghezza paragrafo con parola censurata-->
    <h3>Lunghezza paragrafo con parola censurata</h3>
    <div><?php echo strlen($new_paragrafo) ?></div>

</body>
</html>
