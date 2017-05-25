<meta name="csrf-token" content="{{ csrf_token() }}">


            <div class="content">
               
                    
           	  
            		
            		
          <span class="btn btn-primary btn-lg fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Yeni Model Ekle...</span>
        
        <!-- The file input field used as target for the file upload widget -->
        <input id="fileupload" type="file" name="stlFile" accept=".stl" >
    </span>  <img  id="divWait" src="images/wait.gif" style="display:none;">           
         
            	
            	
                   
                  

                <!-- The global progress bar -->
                    <div id="progress" class="progress">
                        <div class="progress-bar progress-bar-success"></div>
                    </div>
              
                
               
                
             
            </div>


<script>
    $(document).ready(function(){
            $("#upfile1").click(function () {
                
                $("#file1").trigger('click');
                
            });
            
 
    });


            
$(function () {
    'use strict';
   
    // Change this to the location of your server-side upload handler:
    var url = window.location.hostname === 'https://lara-fileupload-nerginer.c9users.io' ?
                '//jquery-file-upload.appspot.com/' : '{{ url("s3-image-upload") }}';
    
    $('#fileupload').fileupload({
       
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
        
        url: url,
        dataType: 'json',
        success: function (data) {
       
      //   alert(data);
     //     console.log(data['id']);
          var myid=data['id'];
           console.log(myid);
          var mygo="printObjects/"+myid+"/progress";
          window.location.replace(mygo);
        },
        done: function (tdata){
          //  alert(tdata);
            
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
            $("#divWait").fadeIn("slow");
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>