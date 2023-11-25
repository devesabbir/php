
 <?php 
   // declare some variables
   $first_name = "Sabbir";
   $last_name = "Hossain";
   $full_name = $first_name." ".$last_name; // concatenate two variables 

  
   define('CONST_NAME','SABBIR HOSSAIN'); 
   
   const FOOD_NAME = "RICE";

   echo FOOD_NAME;

   $age = 30;

  // value check helper function
   function value_info($value) {
      echo '<p>';
      var_dump($value);
      echo '</p>';

   }

   value_info($age);


   const mobiles = ['Samsung', 'Sony', 'Apple', 'Google', 'Windows Phone', 'Xiaomi'];

   const prices = [
     'Samsung' => 1000,
     'Sony' => 2000,
     'Apple' => 3000,
     'Google' => 4000,
     'Windows Phone' => 4000,
     'Xiaomi' => 4000,
   ];

 

    $is_admin = false;

    echo is_bool($is_admin);
  
   require './index.view.php'; // requre another php file here
 ?>