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
     class house{
       public $color;

  function set_color($color){
    $this->color =$color;
  }
 }

 
 $black = new house();
 $black->set_color("black");
 echo  $black->color;
    
    
    ?>
</body>
</html>