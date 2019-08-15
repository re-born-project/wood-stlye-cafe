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
    <div id="contact" class="big-bg">
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

     <div class="wrapper">
       <h2 class="page-title">CONTACT</h2>
       <form action="contact_output.php" method="post">
         <div>
           <label for="name">お名前</label>
           <input type="text" id="name" name="username">
         </div>

         <div>
           <label for="email">メールアドレス</label>
           <input type="email" id="email" name="email">
         </div>

         <div>
           <label for="message">メッセージ</label>
           <textarea id="message" name="message"></textarea>
         </div>

         <input type="submit" class="buttom" value="送信">
       </form>
    </div>

    </br>
    </br>
    <footer>
      <div class="wrapper">
        <p><small>&copy; 2019 wood style cafe</small></p>
      </div>
    </footer>
  </body>
