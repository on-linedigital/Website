<html>
  <head>
    <title>ON:LINE&#174</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/css/animations.css">
    <link rel="stylesheet" href="./assets/fonts/fonts.css">
  </head>
  <body>
  <div id="content">
<p id="logo">ON:LINE<b style="font-size:20px; padding-left:2px">&#174</b></p>
</div>
  <script>
$(function() {
  
  $('#logo').click(function(){
    var bodyContent = $('#content')
    bodyContent.click(function() {
      $(this).fadeOut(500);
    })
  });
  
});
  </script>
</body>  
</html>