<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php if (!empty($_POST['name'])) {
    echo "hello, {$_POST['name']}, and welcome!";
  } ?>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    enter your name: <input type="text" name="name">
    <button type="submit">submit</button>
  </form>
</body>

</html>
