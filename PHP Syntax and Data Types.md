
# PHP Syntax 


```PHP 
  // php syntax 
  <?php echo "Hello world"  ?>  // php with html
  <?php echo "Hello world"   // php without html
  <?= "Hello world" ?> // sorthand without echo
```
 
 #syntax
# PHP variable 

- The variable name must start with the dollar sign (`$`).
- The first character after the dollar sign ( `$`) must be a letter (`a-z`) or the underscore ( `_` ).
- The remaining characters can be underscores, letters, or numbers.

```PHP
 // php variable 
<?php  $title = 'PHP is Awesome' ?>; // php variable define with $ sign 
<h1> <?php echo $title  ?> </h1> // with echo
<h1> <?= $title ?> </h1> // without echo
 
```

#php #variable
# Multiple PHP file

```PHP
 // in index.php file
 <?php 
   // declare some variables
   $first_name = "Sabbir";
   $last_name = "Hossain";
   $full_name = $first_name." ".$last_name; // concatenate two variables 
  
   require 'index.view.php'; // requre another php file here
 ?>
 // in index.view.php file
 <p> <?php echo $full_name  ?> </p>
 
```

 #syntax #php #variable

# PHP Constant

- To define a constant, you use the  `define()` function. The  `define()` function takes the constant’s name as the first argument and the constant value as the second argument. For example:

```PHP
 <?php 
   // declare with define function 
   define('CONST_NAME','SABBIR HOSSAIN'); 
   echo CONST_NAME; 
   // declare with const keyword
   const FOOD_NAME = "RICE";
   echo FOOD_NAME;
 ?>
```


 #Constant  #define 

# PHP var_dump and die

- The `var_dump()` is a built-in function that allows you to dump the information about a variable. The `var_dump()` function accepts a variable and displays its type and value.



```PHP 
 <?php 
   $age = 30;
   var_dump($age); // displays its type and value 
   
   $cell = "01744518886";

  // value check helper function
   function value_info($value) {
      echo '<p>';
      var_dump($value); // First, dump the information about the $message variable using the var_dump() function.
      echo '</p>';
      die(); // Second, terminate the script immediately by calling    the die() function.

   }

   value_info($cell);
   
   echo $age; // this script has been terminated because of using die() function
 ?>
```

#var_dump #die


# PHP Data Types

### Scalar types
- bool
- int
- float
- string

### Compound types
- array
- object
- callable
- iterable

### Special types
- resource
- null

<p align="center" style="background-color:white; padding:10px;"> <img src="https://www.phptutorial.net/wp-content/uploads/2021/03/PHP-types.svg" /> </p>`

#php #datatype


# PHP Array Data

```PHP 
 <?php 
 
   const mobiles = ['Samsung', 'Sony', 'Apple', 'Google', 'Windows Phone', 'Xiaomi'];
   const prices = [
     'Samsung' => 1000,
     'Sony' => 2000,
     'Apple' => 3000,
     'Google' => 4000,
     'Windows Phone' => 4000,
     'Xiaomi' => 4000,
   ];

   echo prices['Sony'];
 ?>
```


#arraydata