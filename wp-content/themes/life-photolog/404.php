<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
<title>404 Not Found | <?php bloginfo('name'); ?></title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/404-ver-lig/css/404.css" />
<script type="text/javascript">
  window.onload = function(){
    var date = new Date();
    var sec = date.getSeconds() % 2;
    var img = new Image ();
    img.src = '<?php bloginfo('stylesheet_directory'); ?>' + '/404-ver-lig/images/img_404_0' + sec + '.png';
    document.getElementById('img404').appendChild(img);
  };
</script>
</head>
<body>
  <div id="outside">
      <h1 id="img404"></h1>
      <div id="bottomArea">
        <h2>お探しのページは見つかりませんでした。</h2>
        <p>このページは、掲載終了・アドレス変更されたか、一時的にご利用できない可能性がございます。<br>
          また、URLを直接入力された場合、入力に間違いがないか再度ご確認ください。<br>
        </p>
        <p class="large"><a class="large" href="<?php echo home_url('/'); ?>">TOPへ</a></p>
      </div>
  </div>
</body>
</html>