<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>
        
    <body>
        <h1>Users list</h1>  
        <p>  
       
        <?php 
              foreach ($res as $u)
              {
        ?>
                <a href="Guide.php?id=<?= $u['id'] ?>"><?= $u['nom'].' '.$u["prenom"] ?></a><br>
        <?php } ?>
        </p>
    </body>
</html>
