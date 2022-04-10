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
        while ($data = $res->fetch())
        {
        ?>
            <div class="news">
            
                    <?= htmlspecialchars($data['id']) ?></br>
                    <?= htmlspecialchars($data['nom']) ?></br>
                    <?= htmlspecialchars($data['prenom']) ?></br>
                    <?= htmlspecialchars($data['username']) ?></br>
                    <?= htmlspecialchars($data['password']) ?>                 
            </div>
        <?php
        }
        $posts->closeCursor();
        ?>
</body>
</html>