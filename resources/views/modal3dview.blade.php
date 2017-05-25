
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
        thingiview.loadSTL("/objects/aa.stl");
      }
    </script>


	

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">3D View</h4>
        </div>
        <div class="modal-body">
              <div id="viewer" style="width:300px;height:300px"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>