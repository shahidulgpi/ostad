<?php

class Person {
    public $name;
    public $email;

    
    public function getName() {
        return $this->name;
    }   
    public function getEmail() {
        return $this->email;
    }
    
    public function setName($name) {
        return $this->name = $name;
    }
    public function setEmail($email) {
        return $this->email = $email;
    }   
  
} 

//$obj = new Person("Shahidul Islam","shahidulgpi@gamil.com");

$obj = new Person();
$obj->setName("Md. shahidul Islam");
$obj->setEmail("shahidulgpi@gmail.com");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic OOP in PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
    <h1 class="my-3">Basic OOP in PHP</h1>
    <span class="text-primary"><?php echo $obj->getName();?></span><br>
    <span class="text-primary"><?php echo $obj->getEmail();?></span>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>