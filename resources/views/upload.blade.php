

            <div class="content">
               
                    
                <form id="stlform" action="{{ url('s3-image-upload') }}" enctype="multipart/form-data" method="POST">
            	  {{ csrf_field() }}
            	  
            	  
            		
            		   <button type="button" class="btn btn-primary btn-lg" id="upfile1"><span class="glyphicon glyphicon-plus"></span>Yeni Model Ekle</button> 
            		
                        <input type="file" id="file1"  name="stlFile" style="display:none" />
                         
                        
               
            	</form>
                   
                  
              
                
               
                
             
            </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>   
<script>
    $(document).ready(function(){
            $("#upfile1").click(function () {
                $("#file1").trigger('click');
               
            });
            
            $("input:file").change(function (){ //dialogtan yukleme yapildiysa formu yolla
                 
                  $("#stlform").submit();
            });
            
    });
</script>    

    
    

