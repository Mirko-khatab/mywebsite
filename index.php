<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="bootstrap.min.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>mywebdemo</title>
</head>

<body>
  <div class="container-sm section">
    <div class="row">
      <div class="col">
        <h2><span>MyProject</span></h2>
        <p>Projects are the most practical way to learn any language, and website is no exception. Solidify your
          knowledge of web building by creating these cool projects.</p>
      </div>
      <div class="col-sm">
        <img src="img/d.svg" alt="svgimage" class="img-thumbnail" width="500px">
      </div>
    </div>
  </div>

  <div class="container-sm section">
    <div class="row row-cols-1 row-cols-sm-3 g-4">
      <?php 
 require_once 'includ/dbc.php';
 $result = $dbh->prepare("SELECT * FROM fpage");
 $result->execute();
 $row = $result->fetchall();
  foreach ($row as $val) {
    ?>
      <div class="col">
        <div class="card h-100 card text-dark bg-light mb-3">
          <img src=<?php echo "img/".$val['imgs']; ?> class="card-img-top " alt="something rong">
          <div class="card-body">
            <h5 class="card-title"><?php echo $val['title']; ?></h5>
            <p class="card-text"><?php echo $val['detail']; ?></p>
            <a href="<?php echo $val['title'].'/index.html'; ?>"><button class="btn btn-primary">Showing</button></a>
            <a href='https://github.com/Mirko-khatab/webproject2'><button class="btn btn-secondary">source
                code</button></a>
          </div>
        </div>
      </div>
      <?php
         }
        ?>
    </div>
  </div>
</body>

</html>