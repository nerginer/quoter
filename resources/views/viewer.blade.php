<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no">
  <title>CAD.ai 3D Viewer</title>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous">        
  </script>
</head>
<body>
  <!-- 
    Here you define your API key and file url. File url variable can be set to be dynamic.
    For example, when user upload file on your server you can define url to the file 
    and assing that value to $fileurl variable.
  -->
  <?php 
    $fileurl = 'https://s3-us-west-2.amazonaws.com/cadai/edited_C1HdLUuLbfkez3bN_.stl';
    $apikey  = "c89d0db5-feb1-4ae2-bd57-16f75e3851a6"; // your api key
  ?>

  <!-- 
    Your div container where you plan to show 3d viewer. 
    You can set width and height of an iframe to match your current page layout. 
  -->
  <div align='center'>
    <iframe id='cadai' src="" width="1200" height="600" frameborder="0" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
  </div>  
  
  <!-- 
    You'll need jQuery on your page for this to work.
    If you don't have it you can use script tag from the header of this example, otherwise 
    just copy and paste this code right above closing body tag. 
  -->
  <script type="text/javascript">
    jQuery(document).ready(function(e) {
      jQuery("#cadai").attr("src","https://widget.cad.ai/?fileurl=<?php echo $fileurl.'&api-key='.$apikey;?>");
    });
  </script>
</body>
</html>