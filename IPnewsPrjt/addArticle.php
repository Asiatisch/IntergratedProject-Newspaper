<?php
  require_once 'classes/DBConnector.php';

  try {
      
    $data = [
        'first_name' => "test",
        'last_name' => "test2",
        'link' => "test3"
      ];
      
      Post::create('author', $data);

      header("Location: index.php");
      
  } catch (Exception $e) {
    die("Exception: " . $e->getMessage());
  }
?>