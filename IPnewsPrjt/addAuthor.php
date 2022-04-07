<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Author</title>
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
        <!-- This is  Author -->
        <div class="topStory width-8 nested">

            <div class="width-12"><hr></div>

                <div class="width-12">
                <h1><span>Add</span> Author</h1>
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
</body>
</html>