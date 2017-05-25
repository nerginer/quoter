<!DOCTYPE html>
<html lang="en">
  <head>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

		<script src="js/Three.js"></script>
	  <script src="js/plane.js"></script>
	  <script src="js/model-controls.js"></script>
	  <script src="js/thingiview.js"></script>
	
	
	

    <script>
      window.onload = function() {
        thingiurlbase = "/js";
        thingiview = new Thingiview("viewer");
        thingiview.setObjectColor('#C0D8F0');
        thingiview.initScene();
        thingiview.loadSTL("/objects/aa9.stl");
      }
    </script>
  </head>
  <body>

    <th><div id="viewer" style="width:300px;height:300px"></div></th>
    

  </body>
</html>







    
	
