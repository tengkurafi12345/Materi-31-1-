<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="#" method="POST">
      <input type="text" name="nama" /><br />
      <input type="text" name="email" /><br />
      <input type="submit" name="submit" id="submit" />
    </form>
    <?php
    if ($_POST)
    {
        echo 'nama:' . $_POST ['nama'];
        echo '<br>';
        echo 'email:' . $_POST['email'];
    }
    
    ?>
  </body>
</html>
