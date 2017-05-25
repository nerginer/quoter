<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>


/*
   jQuery(document).ready(function() {
            // alert('geld');
            
            $("#div2").fadeIn("slow");
            setTimeout(function(){
              $('.progress-bar').css('width', 50+'%').attr('aria-valuenow', 50); 
              $("#div2a").fadeIn("slow");
              
              
              getCuraPrice{{$printObject->id}}();
              
              
              
              $("#div3").fadeIn("slow");
              setTimeout(function(){
                $('.progress-bar').css('width', 100+'%').attr('aria-valuenow', 100); 
                $("#div3a").fadeIn("slow");
        
                 $("#div4").fadeIn("slow");
            
                         
                //     window.location.replace("{{url('/home')}}");
               
               
                
           
              }, 1000);  
              
              
           
            }, 1000);  
            
  
    });

*/


    jQuery(document).ready(function() {
  
              $("#div2").fadeIn("slow");
              $('.progress-bar').css('width', 50+'%').attr('aria-valuenow', 50); 
              $("#div2a").fadeIn("slow");
              
              getCuraPrice{{$printObject->id}}(function(){
                  $("#div3").fadeIn("slow");
                  $('.progress-bar').css('width', 100+'%').attr('aria-valuenow', 100); 
                  $("#div3a").fadeIn("slow");
                  $("#div4").fadeIn("slow");
                  
       //      $(location).attr('href', "{{url('/home')}}");      
             
               
              });

              
   
            
                         
               
               
 
            
  
    });
    
    
function getCuraPrice{{$printObject->id}} (callback) {
           // make an ajax request to api
          
            $.post('/printObjects/{{$printObject->id}}/analize', {
                 _token: $('meta[name=csrf-token]').attr('content')
               
             }
            )
            .done(function(data) {
              //  alert(data);
              $(location).attr('href', "{{url('/home')}}");    //burda olmazsa calismiyor  
            })
            .fail(function() {
              //  alert( "error" );
            });
    callback(); // this will "return" your value to the original caller
  };



    

</script>


