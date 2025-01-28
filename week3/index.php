<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>PHP If Statements</h1> 

        <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

        <?php

        // **************************************************
        // Do not edit this code

        // Generate a random number (1, 2, or 3)
        $randomNumber = ceil(rand(1,3));

        // Display the random number
        echo '<p>The random number is '.$randomNumber.'.</p>';

        // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN
        
        // The random number is 1, so use Codecademy
        if ($randomNumber == 1)
        {

            $linkName = 'Codecademy';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = '';
            $linkDescription = 'Learn to code interactively, for free.';

        }

        // The random number is 2, so use W3Schools
        elseif ($randomNumber == 2)
        {

            $linkName = '';
            $linkURL = 'https://www.w3schools.com/';
            $linkImage = 'w3schools.png';
            $linkDescription = 'W3Schools is optimized for learning, testing, and training.';

        }

        // The random number is 3, so use MDN
        else
        {

            $linkName = 'Mozilla Developer Network';
            $linkURL = 'https://www.codecademy.com/';
            $linkImage = 'mozilla.png';
            $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';

        }

        // **************************************************

        // Beginning of the exercise, place all of your PHP code here
        // Upload this page (or use your localhost) and refresh the page, the h2 below will change
        if($linkName == ''){
            echo '<p>'.$linkDescription.'</p>';
            echo '<p><a href="'.$linkURL.'">'.$linkURL.'</a></p>';
            echo '<img src="'.$linkImage.'" alt="'.$linkName.'"height="200"></p>';
        }
        else if($linkImage == ''){
            echo '<h2>'.$linkName.'</h2>';
            echo '<p>'.$linkDescription.'</p>';
            echo '<p><a href="'.$linkURL.'">'.$linkURL.'</a></p>';
        }
        else if($linkDescription == ''){
            echo '<h2>'.$linkName.'</h2>';
            echo '<p><a href="'.$linkURL.'">'.$linkURL.'</a></p>';
            echo '<img src="'.$linkImage.'" alt="'.$linkName.'"height="200"></p>';
        }
        else if($linkURL == ''){
            echo '<h2>'.$linkName.'</h2>';
            echo '<p>'.$linkDescription.'</p>';
            echo '<img src="'.$linkImage.'" alt="'.$linkName.'" height="200"></p>';

        }
        else{
            echo '<h2>'.$linkName.'</h2>';
            echo '<p>'.$linkDescription.'</p>';
            echo '<p><a href="'.$linkURL.'">'.$linkURL.'</a></p>';
            echo '<img src="'.$linkImage.'" alt="'.$linkName.'"  height="200"></p>';
        }

        
        ?>
        <h1>Challange 1</h1>
        <?php
        
         $randomTime=ceil(rand(0,24));
         if ($randomTime >=1 && $randomTime <=12){
            $convertedTime = $randomTime.'AM';
         echo '<p>The time is '.$convertedTime.'.</p>';}
         if ($randomTime >=13 && $randomTime <=24){
            $convertedTime= ($randomTime-12).'PM';
            echo '<p>The time is '.$convertedTime.'.</p>';
         }

         if ($randomTime >=5 && $randomTime <=9){
             $meal = 'Breakfast';
             $mealFood = 'Bananas, Apples, and Oats';
         }
         elseif ($randomTime >=12 && $randomTime <=14){
             $meal = 'Lunch';
             $mealFood = 'Fish, Chicken, and Vegetables';
         }
         elseif ($randomTime >=19 && $randomTime <=21){
             $meal = 'Dinner';
             $mealFood = 'Steak, Carrots, and Broccoli';
             }
         else{
             $meal = 'No Meal';
             $mealFood = 'No Meal';
         }
         echo '<p>The animals are being fed  '.$meal.'. The food is '.$mealFood.'.</p>';
         ?>
         <h1>Challange 2</h1>
         <?php
         $magicNumber = ceil(rand(1,100));
         echo '<p>The magic number is '.$magicNumber.'.</p>';
         if ($magicNumber %3==0&&$magicNumber %5!=0){
             echo '<p>The magic number is "Fizz".</p>';

         }
         elseif ($magicNumber %5==0&&$magicNumber %3!=0){
             echo '<p>The magic number is "Buzz".</p>';
         }
         else if($magicNumber %3==0 && $magicNumber %5==0){
             echo '<p>The magic number is "FizzBuzz".</p>';
         }
         else{
             echo '<p>The number is not a magic number.</p>';
         }
         ?>
    </body>
</html>