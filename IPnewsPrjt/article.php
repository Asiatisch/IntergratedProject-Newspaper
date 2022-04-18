<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $sideStories = Get::all('articles', 5, $_GET['id']);
    $topStory = Get::byId('articles', $_GET['id']);
    $author = Get::byId('author', $topStory->author_id);
    $category = Get::byId('categories', $topStory->category_id);
      
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
     <!-- NavBar -->
     <div class="width-12">
    <ul>
    	<li><a class="active" href="index.php">Home</a></li>
    <li><a href="addAuthor.php">Author</a></li>
    <li><a href="addArticle.php">addArticle</a></li>
    </ul>
        <!-- This is my main story -->
        <div class="topStory width-12 nested">

            <div class="width-12"><hr></div>

                <div class="width-9">
                <hr>
                <h4><span>Global</span>/War</h4>
                <?php           
                                    ?>
                                    <h1><?= $topStory ->headline ?> </h1>
                                    <h5><span><?= $topStory ->time ?></span> <?= $topStory ->date ?></a> </h5>
                                    <h6 class="summary bottom"><?= $topStory ->summary ?></h6>
                                    <p class="pfont"><?= $topStory ->article ?> </p>
                                    <h5><?= $author ->first_name ?> <?= $author ->last_name ?></h5>
                                 <?php 
                                     ?>
                    
                    
        </div>
        <div class="topStory width-3 nested">


<div class="width-12">

                                    <?php
                                    foreach($sideStories as $sideStory){
                                    ?>
                                     <h4><a href="article.php?id=<?= $sideStory ->id ?>"><?= $sideStory ->headline ?></a> </h4>
                                    <p><?= $sideStory ->summary ?> </p>
                                   <hr>
                                 <?php
                                    }
                                     ?>
     </div>

                             
                        
    </div>
   

</body>

</html>