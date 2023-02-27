<?php

class Person {
    public $name;
    public $email;

    public function __construct( $name, $email ) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
    public function setName($name) {
        return $this->email = $name;
    }
    public function setEmail($email) {
        return $this->email = $email;
    }
}

if(isset($_POST['save'])){

$name = $_POST['name'];
$email = $_POST['email'];

$obj = new Person( $name, $email );


//  echo "<h2>User Information:</h2>";
//  echo "Username: " . $obj->getUsername() . "<br>";
//  echo "Email: " . $obj->getemail() . "<br><br>";

}
?>

 <!doctype html>
 <html lang="en">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Super Global Variable in PHP</title>
     <link href="https:cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   </head>
   <body>
    <div class="container">
     <h1 class="my-3">Super Global Variable in PHP</h1>
    <form action="" method="post">
         <div class="mb-3 mt-5">
             <label for="exampleFormControlInput1" class="form-label">Name</label>
             <input type="text" class="form-control mb-3" name="name" id="exampleFormControlInput1" placeholder="Full Name">
             <span class="text-primary"><?php echo "Output:- User Name is: ". $obj->getUsername();?></span><br>
         </div>
         <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Email address</label>
             <input type="email" name="email" class="form-control mb-3" id="exampleFormControlInput1" placeholder="name@example.com">
             <span class="text-primary"><?php echo "Output:- User Email is: ".$obj->getemail();?></span><br>
         </div>  
         <div class="mb-3">
         <button type="submit" name="save" class="btn btn-primary mb-3">Save</button>
         </div>  

     </form>
    </div>
     <script src="https:cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
 </html>