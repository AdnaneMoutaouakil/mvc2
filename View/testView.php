<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form name="form" action="Guide.php" method="get">
   <input type="Text" name="nom"/>
   <input type="Text" name="prenom"/>
   <!--a href = "Guide.php?action=getUser&id="><button>Get Users</button></a>
   <input type="submit" value="getUser" name="action"/-->
   <input type="submit" value="getUserByName" name="action"/>
</form>


 <a href = "Guide.php?action=getUsers"><button>Get All Users</button></a>


</body>
</html>