<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $sideStories = Get::all('articles', 5);
    $topStories = Get::all('articles', 1);
      
  } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="container">
        <!-- This is my main story -->
        <div class="topStory width-12 nested">

            <div class="width-12"><hr></div>

                <div class="width-6">
                <h4><span>Global</span>/War</h4>
                <?php
                                    foreach($topStories as $topStory){
                                    ?>
                                    <h1><?= $topStory ->headline ?> </h1>
                                    <h5><span><?= $topStory ->time ?></span> <?= $topStory ->date ?></a> </h5>
                                    <h6 class="summary bottom"><?= $topStory ->summary ?></h6>
                                    <p class="pfont"><?= $topStory ->article ?> </p>
                                 <?php
                                    }
                                     ?>
                    
                    <h5>By Hiroki Hachiman</h5>
        </div>
        <div class="topStory width-4 nested">


<div class="width-12">

                                    <?php
                                    foreach($sideStories as $sideStory){
                                    ?>
                                     <h4><a href="url"><?= $sideStory ->headline ?></a> </h4>
                                    <p><a href="url"><?= $sideStory ->summary ?> </p>
                                   <hr>
                                 <?php
                                    }
                                     ?>
     </div>

                             
                        
    </div>
   

</body>

</html>