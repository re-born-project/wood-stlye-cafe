<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>wood-style cafe - contact</title>
    <meta name ="description" content="緑のツタと木々に囲まれた石窯の炎で心地よい空間を提供するカフェ">
  <!-- レスポンシブ対応 -->
    <meta name="viewpoint" content="width=device-width,initial-scale=1">

  <!-- ファビコン -->
    <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- css -->
    <link rel="stylesheet" href="http://unpkg.com/ress/dist/ress.min.css">
    <link href="http://fonts://fonts.googleapis.com/css?family=Philosopher" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>

  <body>
    <div id="contact-output" class="big-bg">
     <header class="page-header wrapper">
       <h1><a href="index.php"><img class="logo" src="images/logo.png" alt="ホーム"></a></h1>
       <nav>
        <ul class="main-nav">
          <li><a href="what.php">What's</a></li>
          <li><a href="menu.php">Menu</a></li>
          <li><a>Contact</a></li>
        </ul>
       </nav>
     </header>


     <div class="ress">

     <?php
        $pdo=new PDO('mysql:host=localhost;dbname=wood_stlye_cafe;charset=utf8','sa','P@ssw0rd');
        $sql=$pdo->prepare('insert into contact_data values(?,?,?)');
        if($sql->execute([$_REQUEST['username'],$_REQUEST['email'],$_REQUEST['message']])){
          echo $_REQUEST['username'],'様  お問い合わせありがとうございます。送信が完了しました。';
        }else{
          echo '送信が出来ませんでした。再度メッセージを入力ください。';
        }
        ?>

      </br>
      </div>
      <a class="home-buttom" href="index.php">HOME</a>
    </br>
    </br>


    <footer>
      <div class="wrapper">
        <p><small>&copy; 2019 wood style cafe</small></p>
      </div>
    </footer>
  </body>
