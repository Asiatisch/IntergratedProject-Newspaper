
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
    <li><a href="addArticleForm.php">addArticle</a></li>
    <li><a href="url">update Author</a></li>
    <li><a href="url">update Article</a></li>
    </ul>
        <!-- This is  Author -->
        <div class="topStory width-8 nested">

            <div class="width-12"><hr></div>

                <div class="width-12">
                <h1><span>Add</span> Author</h1>
                <form method="POST" action="addAuthor.php">
                <div>
                <label>First Name<label><br>
                <textarea name="first_name" rows="2" cols="100"></textarea>
                </div>
                
                <div>
                <label>Last name<label><br>
                <textarea name="last_name" rows="2" cols="100"></textarea>
                </div>
               
                <div>
                <label>link<label><br>
                <textarea name="link" rows="2" cols="100"></textarea>
                </div>
                <a href ="index.php">Cancel
                <input type="submit">
                </form>
                <div class="clear"></div>
        </div class>
</body>
</html>