<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $data = [
        'headline' => $_POST["headline"],
        'short_headline' => $_POST["short_headline"],
        'sub_heading' => $_POST["sub_heading"],
        'article' => $_POST["article"],
        'summary' => $_POST["summary"],
        'date' => $_POST["date"],
        'time' => $_POST["time"],
        'author_id' => $_POST["author_id"],
        'category_id' => $_POST["category_id"],
      ];
      
      Post::create('articles', $data);

      header("Location: index.php");
      
  } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
?>