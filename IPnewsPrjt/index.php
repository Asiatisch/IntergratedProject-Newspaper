<?php
  require_once 'classes/DBConnector.php';

  try {
  
  
    $sideStories = Get::all('articles', 8, 1);
    $topStories = Get::all('articles', 1);
    $bottomStories = Get::all('articles', 4, 1);
    
    
      
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

<body>

    <div class="container">
     <!-- NavBar -->
    <div class="width-12">
    <ul>
    	<li><a class="active" href="#home">Home</a></li>
    <li><a href="addAuthorForm.php">Author</a></li>
    <li><a href="addArticleForm.php">addArticle</a></li>
    </ul>

    </div>
        <!-- This is my main story -->
        <div class="topStory width-8 nested">
          

            <div class="width-12"><hr></div>
          
            <div class="width-12">
               
               
                
                <?php
                
                foreach($topStories as $topStory){
                  $author = Get::byId('author', $topStory->author_id);
                  $category = Get::byId('categories', $topStory->category_id);
                ?>
                <h4><?= $category ->name ?>
                <h1><a href="article.php?id=<?= $topStory ->id ?>"><?= $topStory ->headline ?></a></h1>
                <h5><span><?= $topStory ->time ?></span> <?= $topStory ->date ?></a> </h5>
                <h6 class="summary bottom"><?= $topStory ->summary ?></h6>
                <p class="pfont"><?= $topStory ->article ?> </p>
                <h5 class="pfont"><?= $author ->first_name ?> <?= $author ->last_name ?></h5>
              <?php
                }
                  ?>
                    
                    

            </div>
                     
            <?php
            foreach($bottomStories as $bottomStory){
              $author = Get::byId('author', $bottomStory->author_id);
              $category = Get::byId('categories', $bottomStory->category_id);
            ?>
            <div class="width-6">
              <hr>
            <h5><?= $category ->name ?></h5>
                <h3><a href="article.php?id=<?= $bottomStory ->id ?>"><?= $bottomStory ->headline ?> </a></h3>
                <h5><a href="url"><?= $bottomStory ->time ?> <?= $bottomStory ->date ?></a> </h5>
                <p><a href="url"><?= $bottomStory ->summary ?> </a></p>
                <h5><?= $author ->first_name ?> <?= $author ->last_name ?></h5>
               
            </div>
                      <?php
                                    }
                                     ?>
                         
        <div class="topstory width-8"></div>
    
            
        </div>
             <div class="topStory width-4 ">
                <div class="width-12">
                    <hr>
                                    <?php
                                    foreach($sideStories as $sideStory){
                                    ?>
                                     <h4><a href="article.php?id=<?= $sideStory ->id ?>"><?= $sideStory ->headline ?></a> </h4>
                                    <p><a href="url"><?= $sideStory ->summary ?> </p>
                                   <hr>
                                 <?php
                                    }
                                     ?>
                                   
                                 
                                 </div>
                                
                             <div class="topStory width-4">
                             
                         <hr>
    </div>
   

</body>

</html>