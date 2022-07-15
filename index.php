<html>
  <head>
    <title>ON:LINE&#174</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/animations.css">
    <link rel="preload" as="style" onload="this.rel = 'stylesheet'" href="./assets/fonts/fonts.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </head>
  <body>
    <div id="preload">
      <img src="./assets/img/mask1.gif" />
    </div>
    <div id="error">
      <?
$count_my_page = ("./assets/hitcounter/hits.txt");
$hits = file($count_my_page);
$hits[0] ++;
$fp = fopen($count_my_page , "w");
fputs($fp , "$hits[0]");
fclose($fp);
// $sno=$hits[0];
// echo $sno;
?>
    </div>
    <div id="content">
      <p id="logo">ON:LINE<b style="font-size:20px; padding-left:2px">&#174</b>
      </p>
    </div>
  </body>
</html>