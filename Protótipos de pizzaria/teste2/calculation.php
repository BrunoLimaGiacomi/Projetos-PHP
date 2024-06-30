<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
     <h1>Result:</h1>
     <div id='resultt'></div>
    <?php 
  if (isset($_POST['calculation'])) 
  {
    echo "abc";
    $calculation = $_POST["calculation"];
    $resultt = eval("return $calculation;");
    echo $resultt;
  }
  else
  {
    echo "aaaaaaaaaa";
  }
    ?>
</body>
</html>