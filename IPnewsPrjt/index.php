<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $sideStories = Get::all('articles', 7);
      
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
        <div class="topStory width-8 nested">


            
            <div class="width-12"><hr></div>

            <div class="width-12">
                <h4><span>Global</span>/War</h4>
                <h1>Japan to accept Ukranian refugees</h1>
                <h5><span>4:42 pm</span> - Feburuary 17, 2022</h5>
                <h6 class="summary bottom">Japan will accept Ukrainian refugees who have fled to other countries because of the ongoing conflict in their country, Prime Minister Fumio Kishida has revealed.</h6>
                    <p class="pfont">Japan said Wednesday it will temporarily close its embassy in Kyiv as Russia's invasion of Ukraine escalates, with many civilians desperately fleeing the country.
                        The embassy's operations will be transferred to a temporary liaison office set up in Lviv in western Ukraine, according to the Foreign Ministry.The office, 
                        located near the border with Poland, will continue to provide support to Japanese citizens living in Ukraine, including those trying to evacuate from the country, 
                        the ministry said.The decision to close the embassy on Wednesday was announced after Russia's military said it would strike Ukrainian communications and intelligence 
                        sites in Kyiv, warning residents near them to leave. On Tuesday, Russian forces fired at the main television tower in the Ukrainian capital, killing at least five people.
                    </p>
                    <h5>By Hiroki Hachiman</h5>

            </div>
                     <div class="width-6">
                         <hr>
                        <h5><span>Business</span>/Economy</h5>
                         <a href="url"><h3>Japan ruling parties approve economic security bill</h3></a>
                        <h5>4:42 pm - 01/03/2022</h5>
                        <p>Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down Reports Her Relationship
                            With
                            Rich
                            Paul Is "Strained" Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down
                            Reports
                            Her
                            Relationship With </p>
                         <h5>By Hiroki Hachiman</h5>
                         <hr>
                    </div>
                    <div class="width-6">
                        <hr>
                        <h5><span>Business</span>/Economy</h5>
                        <a href="url"><h3>Japan ruling parties approve economic security bill</h3></a>
                        <h5>4:42 pm - 01/03/2022</h5>
                        <p>Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down Reports Her Relationship
                            With
                            Rich
                            Paul Is "Strained" Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down
                            Reports
                            Her
                            Relationship With </p>
                         <h5>By Hiroku Hachiman</h5>
                    </div>
                    <div class="width-6">
                        <hr>
                        <h5><span>Business</span>/Economy</h5>
                        <a href="url"><h3>Japan ruling parties approve economic security bill</h3></a>
                        <h5>4:42 pm - 01/03/2022</h5>
                        <p>Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down Reports Her Relationship
                            With
                            Rich
                            Paul Is "Strained" Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down
                            Reports
                            Her
                            Relationship With </p>
                         <h5>By Hiroki Hachiman</h5>
                    </div>
                
                    <div class="width-6">
                        <hr>
                        <h5><span>Business</span>/Economy</h5>
                        <a href="url"><h3>Japan ruling parties approve economic security bill</h3></a>
                        <h5>4:42 pm - 01/03/2022</h5>
                        <p>Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down Reports Her Relationship
                            With
                            Rich
                            Paul Is "Strained" Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down
                            Reports
                            Her
                            Relationship With </p>
                         <h5>By Hiroki Hachiman</h5>
                    </div>
                
           
        <div class="topstory width-8"></div>
    
            
        </div>
             <div class="topStory width-4 ">
                <div class="width-12">
                    <hr>
                    <h4><a href="url">Japan ruling parties approve economic security bill</a> </h4>
                    <p>Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down Reports Her Relationship
                        With
                        Rich
                        Paul Is "Strained" Adele's New Diamond Ring Has Sparked Engagement Rumors After She Shut Down
                        Reports
                        Her
                        Relationship With </p>
                        <hr>
                     </div>
                     <div class="topStory width-4 "> 
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
                                
                             <div class="topStory width-4">
                             
                            

    </div>
   

</body>

</html>