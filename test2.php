<?php
// request list of contacts from Web API
$json = file_get_contents('http://jsonplaceholder.typicode.com/photos/');

// deserialize data from JSON
$photos = json_decode($json);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Example with public api and php</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>Example with public api and php</h1>
    <div class="panel panel-primary">
    <ul class="list-group">
    <?php
    $record = 1;
    foreach($photos as $photo)
    {
      ?>
      <div class="panel-heading">
        <?php echo '<h4><b>Title: ' .   $photo->title  . '</b></h4>'?>
      </div>
      <div class="panel-body">
          <?php echo '<li class="list-group-item list-group-item-success"><b>Url: </b><a href="'. ' ' . $photo->url. '">'. $photo->url . '</a></li>'?>
          <?php echo '<li class="list-group-item list-group-item-info"><b>Thumbnail Url: </b><a href="'. ' ' . $photo->thumbnailUrl. '">'. $photo->url . '</a></li>'?>
          <?php echo '<li class="list-group-item list-group-item-warning"><b>Album Id:</b>'. ' ' . $photo->albumId.'</li>'?>
          <?php echo '<li class="list-group-item list-group-item-danger"><b>Id:</b>'. ' ' . $photo->id.'</li>'?>
      </div>
        <?php
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
