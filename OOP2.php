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
    class flower {
        public $name; 
        public $color;

        function set_name($name){
            $this->name = $name;
        }
        function get_name(){
            return $this->name;
        }

        function set_color($color){
            $this->color = $color;
        }
        function get_color(){
            return $this->color;
        }
    }

    $Rose = new flower();
    $Red = new flower();
    $Rose->set_name('Rose');
    $Red->set_name('Red');

    echo "name:" .  $Rose-> get_name(); 
    echo "<br>";
    echo "color:" .  $Red-> get_color(); 
    
    
    ?>
</body>
</html>