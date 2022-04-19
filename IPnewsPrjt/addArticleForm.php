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
 <!-- NavBar -->
 <div class="width-12">
    <ul>
    	<li><a class="active" href="index.php">Home</a></li>
    <li><a href="addAuthorForm.php">Author</a></li>
    <li><a href="addArticle.php">addArticle</a></li>
    </ul>
        <!-- This is the add Article form  -->
        <div class="topStory width-8 nested">

            <div class="width-12"><hr></div>

                <div class="width-12">
                <h1><span>Add</span> Article</h1>
                <form method="POST" action="addArticle.php">
                <div>
                <label>headline<label><br>
                <input type=-"text"/>
                </div>
                
                <div>
                <label>Sub Heading<label><br>
                <input type=-"text"/>
                </div>
               
                <div>
                <label>Summary<label><br>
                <input type=-"text"/>
                </div>

                <div>
                <label>Article<label><br>
                <input type=-"text"/>
                </div>

                <div>
                <label>Summary<label><br>
                <input type=-"text"/>
                </div>

                <div>
                <label>date<label><br>
                <input type=-"text"/>
                </div>

                <div>
                <label>time<label><br>
                <input type=-"text"/>
                </div>

                <div>
                <label>Author<label><br>
                <input type=-"text"/>
                </div>

                <div>
                <label>category<label><br>
                <input type=-"text"/>
                </div>
                <a href ="index.php">Cancel</a>
                <input type="submit">
                </form>
  
        </div>
</body>
</html>