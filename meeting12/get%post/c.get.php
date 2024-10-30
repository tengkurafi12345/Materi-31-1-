<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="#" method="GET">
      <input type="text" name="nama" /><br />
      <input type="text" name="email" /><br />
      <input type="submit" name="submit" id="submit" />
    </form>
    <?php
    if ($_GET)
    {
        echo 'nama:' . $_GET ['nama'];
        echo '<br>';
        echo 'email:' . $_GET['email'];
    }
    
    ?>
  </body>
</html>
