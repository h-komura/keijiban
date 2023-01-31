<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>4eachblog 掲示板</title>
  <link rel="stylesheet" type="style/css" href="style.css">
</head>

<body>

  <header>
    <div class="mark">
      <img src="4eachblog_logo.jpg">
    <div>
    <div class="menu">
      <ul>
        <li>トップ</li>
        <li>プロフィール</li>
        <li>4eachについて</li>
        <li>登録フォーム</li>
        <li>問い合わせ</li>
        <li>その他</li>
      </ul>
    </div>
    <link rel="stylesheet" href="style.css">
  </header>
  
  <main>
    <div class="left">
      <h1>プログラミングに役立つ掲示板</h1>
      <div class="block">
        <h2>入力フォーム</h2>
        <form method="post" action="insert.php">
          <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
          </div>

          <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
          </div>

          <div>
            <label>コメント</label>
            <br>
            <input type="text" class="text" size="35" name="comments">
          </div>

          <div>
            <input type="submit" class="submit" value="投稿する">
          </div>
        </form>
      </div>
      <?php
        mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
        $stmt = $pdo->query("select * from 4each_keijiban");

        while($row = $stmt->fetch()){
          echo "<div class='kiji'>";
          echo "<h3>".$row['title']."</h3>";
          echo "<div class='comtents'>";
          echo $row['comments'];
          echo "<div class='handlename'>posted by".$row['handlename']."</div>";
          echo "</div>";
          echo "</div>";
        }
      ?>
      
    </div>
    <div class="right">
      <h1>人気の記事</h1>
      <ul>
        <li>PHPオススメ本</li>
        <li>PHP MyAdminの使い方</li>
        <li>今人気のエディタTop5</i>
        <li>HTMLの基礎</li>
      </ul>
      <h1>オススメリンク</h1>
      <ul>
        <li>インターノウス株式会社</li>
        <li>XAMPPのダウンロード</li>
        <li>Eclipseのダウンロード</li>
        <li>Bracketsのダウンロード</li>
      </ul>
      <h1>カテゴリ</h1>
      <ul>
        <li>HTML</li>
        <li>PHP</li>
        <li>MySQL</li>
        <li>JavaScript</li>
      </ul>
    </div>
  </main>
  
  <footer>
    copyright©internous | 4each blog the which provides A to Z about programming.
  </footer>
  
</body>


