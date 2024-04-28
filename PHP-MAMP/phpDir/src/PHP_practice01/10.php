<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>
<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-xs-8">


    <?php

		/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/

  class Dog {
    public $name;
    public $breed;
    public $eyeColor;
    public $furColor;
    
    function showAll() {
        echo "Name: " . $this->name . "<br>";
        echo "Breed: " . $this->breed . "<br>";
        echo "Eye Color: " . $this->eyeColor . "<br>";
        echo "Fur Color: " . $this->furColor . "<br>";
    }
}

$dog = new Dog();
$dog->name = "Tommy";
$dog->breed = "Pitbull";
$dog->eyeColor = "Blue";
$dog->furColor = "White";
$dog->showAll();

 //This is using contructor both works fine.
// class Dog {
//   public $name;
//   public $breed;
//   public $eyeColor;
//   public $furColor;
  
  
//   function __construct($name, $breed, $eyeColor, $furColor) {
//        $this->name = $name. '<br>'
//        $this->breed = $breed. '<br>'
//        $this->eyeColor = $eyeColor. '<br>'
//         $this->furColor = $furColor. '<br>'
//   }
  // public function showAll(){
  //   echo "Name: $this->name,
  //         Breed: $this-> breed,
  //         Eye Color: $this->eyeColor,
  //         Fur Color: $this->furColor";
  // }
// 
// }


// $dog = new Dog("Tommy", "Pitbull", "Blue", "White");
// $dog->showAll();

 
		?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php"; ?>