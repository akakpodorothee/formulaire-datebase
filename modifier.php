<?php require_once("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">
    <title>Document</title>
</head>
<body>

     <h2>Modification de message</h2>

       <form  method="post" >

            <label for="name">Name</label>
            <input type="text" name="name" id="name">

            <label for="message">Message</label>
            <textarea name="message" id="message"></textarea>

            <label for="priority">priority</label>

         <select name="priority" id="priority">

            <option value="1">Low</option>
               <option value="2" selected>Medium</option>
               <option value="3">High</option>
          </select>
          
          <fieldset>
              <legend>Type</legend>
              <label for="type">
                 <input type="radio" name="type" value="1" checked id="">
                   Complaint 
              </label>

                <br>

              <label >
                  <input type="radio" name="type" value="2" id="">
                   Suggestion
               </label>
         </fieldset>

              <label >
                 <input type="checkbox" name="terms">
                  I agree to the terms and conditions
             </label>
               
             <br>

             <button name="modifier">Send</button>
      </form>
            
            <?php

            if(isset($_GET["Id"]))
            {
            $name = $_POST["name"];
            $message = $_POST["message"];
            $priority = filter_input(INPUT_POST, "priority", FILTER_VALIDATE_INT);
            $type = filter_input(INPUT_POST, "type", FILTER_VALIDATE_INT);
              $Id=$_GET["Id"];
              $req=$conn->query("UPDATE message SET name='$name' ,body='$message' ,priority='$priority' WHERE Id=$Id");
              if($req){
                  echo "Modifier Réussie";
              }

            }
            ?>
</body>

</html>

