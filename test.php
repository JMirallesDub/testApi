<?php
// request list of photos from Web API
$json = file_get_contents('http://jsonplaceholder.typicode.com/photos/');

// deserialize data from JSON
$photos = json_decode($json, true);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example with public api and php </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container">
      <h1><b>Movies</b></h1>
      <ul class="list-group">

        <?php
            foreach ($photos as $value) {
              echo '<h4><b>Title: ' . $value['title'] . '</b></h4>';
              echo '<li class="list-group-item list-group-item-success"><b>Url: </b>'. '<a href="' . $value['url'].'">' . $value['url'].'</a></li>';
              echo '<li class="list-group-item list-group-item-info"><b>Thumbnail Url: </b>' . '<a href="' . $value['thumbnailUrl'].'">' . $value['thumbnailUrl'].'</a></li>';
              echo '<li class="list-group-item list-group-item-warning"><b>Album Id: </b>' . ' ' . $value['albumId'].'</li>';
              echo '<li class="list-group-item list-group-item-danger"><b>Id: </b>' . ' ' . $value['id'].'</li>';
            }
         ?>
      </ul>
    </div>

    <!-- jQuery (Must for Bootstrap) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <!-- Bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  </body>
</html>
