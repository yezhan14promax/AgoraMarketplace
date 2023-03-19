<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="css.css" type="text/css" />
  <link rel="stylesheet" href="icon/iconfont.css" type="text/css" />
</head>

<body>
  <div id="header" class="container-fluid">
    <div class="row" style="padding: 20px">
      <div class="col-4"></div>
      <div class="col-4">
        <h1 align="center"><b>Agora Francia</b></h1>
      </div>
      <div class="col-4">
        <img src="image/logo.png" width="200" align="right" />
      </div>
    </div>
  </div>

  <div id="nav" class="container" style="border-radius: 60px"></div>

  <div id="section" class="container"></div>

  <div id="footer" class="container">
    <footer>
      <small>
        <p align="center">
          concu par yezhan. contact:<a href="mailto:1472804183@qq.com">
            1472804183@qq.com
          </a>
        </p>
        <p align="center">copyright &copy;2023 | lstest update:28-02-2023</p>
      </small>
    </footer>
  </div>

  <div class="fix_icon">
    <?php
    $icon = [
      "accueil.php" => 'iconfont icon-shouye',
      "parcourir1.php" => 'iconfont icon-gongneng',
      "notification.php" => 'iconfont icon-xiaoxi2',
      "panier.php" => 'iconfont icon-caigou',
      "compt.php" => 'iconfont icon-wode',
      "https://www.google.com/maps" => 'iconfont icon-weizhi'
    ]
      ?>

    <?php foreach ($icon as $w => $e) { ?>
      <div class="icon1">
        <a href=" <?php echo $w; ?> ">
          <span class=" <?php echo $e; ?> " style="font-size: 50px"></span>
        </a>
      </div>
    <?php } ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>