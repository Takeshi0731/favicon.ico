<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/d4c436a9cd.js" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="favicon.ico"/>
  <title>Takeshi.portfolio</title>
  
</head>
<body>
  <div class="wrap">
    <header>
      <div class="container-head">
        <div class="header-left">
          <a href="#top">
            <img class="logo" src="logo.png" alt="ロゴマーク" >
          </a>
        </div>
        <div class="header-right">
          <div class="menu-icon" id="open">
              <i class="fas fa-bars"></i>
          </div>  
        </div>
        <div class="clear"></div>
      </div>
      

    </header>
    
    <div class="menu-modal-wrapper" id="menu-modal">
      <div class="modal">
        <ul>
          <li>
            <a href="#top" class="btn">TOP</a>
          </li>
          <li>
            <a href="#about" class="btn">ABOUT</a>
          </li>
          <li>
            <a href="#works" class="btn">WORKS</a>
          </li>
          <li>
            <a href="#contact" class="btn">CONTACT</a>
          </li>
          <li>
              <i class="far fa-times-circle" id="close"></i>
          </li>
        </ul>
      </div>
    </div>

    <!--トップ-->
    <div id="top">
      <div class="container">
        <div class="top-text">
          <h1>WELCOME! <br>
          TAKESHI‘s portfolio.</h1>
        </div>
        <div class="menu">
          <nav class="menu-list">
            <ul>            
              <li>
                <a href="#about" class="btn" >ABOUT</a>
              </li>
              <li>
                <a href="#works" class="btn">WORKS</a>
              </li>
              <li>
                <a href="#contact" class="btn">CONTACT</a>
              </li>
            </ul>
          </nav>      
        </div>
      </div>
    </div>
    <!--トップここまで-->

    <div id="about">
      <div class="container-2">
        <h1>ABOUT</h1>
        <div class="file">
          <div class="photo">
            <img src="profile.jpeg" alt="三浦健の写真">
          </div>
          <div class="profile">
            <h1>TAKESHI<br>MIURA</h1>
            <p>1995年生まれ　神奈川県出身。<br>都内でパーソナルトレーナーとして活動しつつ、<br> WEBサイト作成や動画編集、制作を請け負っている。</p>
          </div>
        </div>

      </div>    
      
    </div>
    <!--profileここまで-->
    <!--ここからworks-->
    <div id="works">
      <div class="container-3">
        <h1>WORKS</h1>
        <div class="skil">
          <div class="contents lp">
              <h2>LP制作</h2>  
              <p class="item">COMING SOON</p>  
          </div>
          <div class="contents hp">
              <h2>HP制作</h2>
              <p class="item">COMING SOON</p>
          </div>
          <div class="contents move">
              <h2>動画編集・制作</h2>
              <iframe class="item2" width="90%" height="315" src="https://www.youtube.com/embed/vno4NqvKI6o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <a href="https://www.youtube.com/watch?v=1WH0h2npRWM&list=PLMuhsNRpR-PX6Pfnqiqvs0fF-AurVXJ1k" class="btn ">other</a>
          </div>
        </div>
      </div>
    </div>
    <!--ここまでworks-->
    <!--ここからcontact-->
    <div id="contact">
      <div class="container-4">
        <h1>CONTACT</h1>
        <div class="info">
        <?php
          /*******************************
           確認ページから戻ってきた場合のデータの受け取り 
          *******************************/
          if (isset($_POST["backbtn"])) {
            //確認ページ（confirm.php）から戻ってきた場合にはデータを受け取る
            $namae		= $_POST["namae"];		//お名前
            $mailaddress	= $_POST["mailaddress"];	//メールアドレス
            $naiyou		= $_POST["naiyou"];		//お問合せ内容

            //危険な文字列を入力された場合にそのまま利用しない対策
            $namae		= htmlspecialchars($namae, ENT_QUOTES);
            $mailaddress	= htmlspecialchars($mailaddress, ENT_QUOTES);
            $naiyou		= htmlspecialchars($naiyou, ENT_QUOTES);
          } else {
            //確認ページから戻ってきた場合でなければ、変数の値は必ず空となる
            $namae		= '';				//お名前
            $mailaddress	= '';				//メールアドレス
            $naiyou		= '';				//お問合せ内容
          }
        ?>

          <form method="post" action="confirm.php">
          <p><label>お名前：<br>
          <input type="text" maxlength="255" name="namae" value="<?=$namae?>">
          </label></p>

          <p><label>メールアドレス：<br>
          <input type="email" size="30" maxlength="255" name="mailaddress" value="<?=$mailaddress?>">
          </label></p>

          <p><label>お問合せ内容：<br>
          <textarea name="naiyou" cols="40" rows="5"><?=$naiyou?></textarea>
          </label></p>

          <p><input type="submit" value="入力内容を確認する"></p>
          </form>

         <!-- <p>
            お問い合わせ、お仕事のご依頼は
            <a href="mailto:pttakeshi0731@gmail.com">こちら</a>からお願いいたします。
          </p> -->

        </div>

      </div>

    </div>
    <footer>
      <div class="container-foot">
        <h1><i class="far fa-copyright foot"></i>TAKESHI</h1>
      </div>

    </footer>
  </div>
  <!--Jquery-->
  <script>
      jQuery(function(){
            /*モーダル*/
            $('#open').click(function(){
              $('#menu-modal').fadeIn();
            });
            $('#close').click(function(){
              $('#menu-modal').fadeOut();
            });
            /*モーダル*/
            /*TOP*/
            var btn_hover={
              "letter-spacing": "5px",
              "transition": "all 0.2s"
            } 
            var btn_out={
              "letter-spacing": "0px",
              "transition": "all 0.2s"
            }
            $('.btn')
           .mouseover(function () {
             $(this).css(btn_hover);
           })
           .mouseout(function () {
             $(this).css(btn_out);
           });
            /*TOP*/
            /*WORKS*/
            var p_move={
              "letter-spacing": "5px",
              "font-size": "35px",
              "transition": "all 0.3s"
            }
            var p_out={
              "letter-spacing": "0px",
              "font-size": "30px",
              "transition": "all 0.3s"
            }
            var move_hover={
              "width": "100%",
              "height": "330px",
              "transition": "all 0.2s"
            }
            var move_out={
              "width": "90%",
              "height": "315px",
              "transition": "all 0.2s"
            }
           $('.item')
           .mouseover(function () {
             $(this).css(p_move);
           })
           .mouseout(function () {
             $(this).css(p_out);
           });
           $('.item2')
           .mouseover(function () {
             $(this).css(move_hover);
           })
           .mouseout(function () {
             $(this).css(move_out);
           });
           /*WORKS*/                      
      });
   </script>
  
</body>
</html>