<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <?php
        $paragraphOriginal = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam hic excepturi molestias! Amet necessitatibus mollitia, corporis animi, unde quaerat totam, asperiores voluptate doloremque odio enim quasi aut cumque impedit sunt?";
        //controllo se viene passato la parola da censurare
        if(isset($_GET['word'])){
            $word = $_GET['word'];
        } else {
            $word = 'N/A';
        }
        $paragraphModified = str_replace($word,'...', $paragraphOriginal);
    ?>
    
    <h2>Paragrafo originale:</h2>
    <p><?php echo $paragraphOriginal; ?></p>
    <h3>Lunghezza:</h3>
    <span><?php echo strlen($paragraphOriginal);?></span>
    <br/>
    <br/>
    <br/>
    <h3>Parola da censurare: </h3>
    <span><?php echo $word; ?></span>
    <br/>
    <br/>
    <br/>
    <h2>Paragrafo modificato:</h2>
    <p><?php echo $paragraphModified; ?></p>
    <h3>Lunghezza:</h3>
    <span><?php echo strlen($paragraphModified);?></span>

</body>
</html>
