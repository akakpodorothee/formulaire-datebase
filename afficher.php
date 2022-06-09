<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos contacts</title>
</head>
<body>
    

<h4>listes des contacts</h4>

  <table>
     <th>id</th>
     <th>name</th>
     <th>body</th>
     <th>priority</th>
     <th>type</th>

    <?php

        require_once("connect.process-form.php");
        $req=$con->query("SELECT * FROM message");
       while($aff=$req->fetch()){?>

         <tr>
             <td>  <?php echo $aff['id']; ?> </td>
             <td> <?php echo $aff['name']; ?> </td>
             <td> <?php echo $aff['body']; ?> </td>
             <td> <?php echo $aff['priority']; ?> </td>
             <td> <?php echo $aff['type']; ?> </td>
         </tr>
    <?php{?>

</table>
</body>
</html>