<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <?php
  $students=[
    [
      "name" => "RM",
      "height" => 180,
      "weight"=> 70
    ],
    [
      "name" => "JIN",
      "height" => 188,
      "weight"=> 75
    ],
    [
      "name" => "V",
      "height" =>185,
      "weight"=> 68
    ]
  ]  
      $count=count.$students;
      for($i=0; $i<$count.length; $i++){
        echo $student[i];
      }

  ?>

  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="card p-3">
          <h3>name</h3>
          <div>height</div>
          <div>weight</div>
        </div>
      </div>
    </div>
  </div>

  </body>
</html>