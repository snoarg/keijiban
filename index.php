<!doctype HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>4eachblog掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
            mb_internal_encoding("utf8");
                    
             $pdo=new PDO("mysql:dbname=lesson02;host=localhost;","root","");
            $stmt=$pdo->query("select*from 4each_keijiban");
    ?>
    <heder>
        <img src="4eachblog_logo.jpg" class="im1">
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4ecahについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </heder> 
        <main>
            <div class="left">
                <h1>プログラミングに役立つ掲示板</h1>
                <form method="post" action="insert.php"　class="asa">
                    <div class="hand">
                        <p>ハンドルネーム</p>
                        <input type="text" name="handlname">
                    </div>
                    <div class="hand">
                        <p>タイトル</p>
                        <input type="text" name="title">
                    </div>
                    <div class="hand">
                        <p>コメント</p>
                       <textarea cols="35" rows="7" name="comments"></textarea>
                    </div>
                        <div class="botton">
                       <input type="submit" class="submit" value="送信する">
                        </div>
                </form>
                
                <?php
                    while( $row = $stmt->fetch() ){
                        echo"<div class='souran'>";
                        echo"<h3>".$row['title']."</h3>";
                        echo"<div class='contents'>";
                        echo $row['comments'];
                        echo "<div class='handlname'>posted by".$row['handlname']."</div>";
                        echo "</div>";
                        echo "</div>" ;
                        
                        
                    }
                ?>
                </div>
      <div class="right">    
            <div class="side1"> 
                <h2>人気の記事</h2>
                <ul >
                    <li>PHPおすすめ本</li>
                    <li>PHP Myadminの使い方</li>
                    <li>今人気のエディターtop5</li>
                    <li>HTMLの基準</li>
                </ul>
            </div> 
            <div class="side1">  
                <h2>オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>MXMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            </div>
            <div class="side2">
                <h2>カテゴリー</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Java Script</li>
                </ul>
            </div>
        </div>
        
    </main>
    <footer>
        <p>Copyright©internous|4each blog the which provides A to Z about programing</p>    
    </footer>
</body>


</html>