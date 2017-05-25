<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3D Baskı Hizmeti</title>
        <!-- jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            
             .mybutton {
                font-size: 30px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 250px;
            }
            
            .nm-b-md {
                margin-bottom: 550px;
            }
            
            #stl_file{
              margin-left: 95px;
            }

            
            
            
            
        </style>
    </head>
    <body>
        
     @if (count($errors) > 0)
	 <div class="alert alert-danger">
	    <strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
		  @foreach ($errors->all() as $error)
		    <li>{{ $error }}</li>
		  @endforeach
		 </ul>
	    </div>
      @endif

	  @if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			
		        <strong>{{ $message }}</strong>
		</div>
		
	  @endif
        
        
        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Ana Sayfa</a>
                    @else
                        <a href="{{ url('/login') }}">Giriş Yap</a>
                        <a href="{{ url('/register') }}">Üye Ol</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    HIZLI 3D Baskı <br>
                    
                <form id="stlform" action="{{ url('s3-image-upload') }}" enctype="multipart/form-data" method="POST">
            	  {{ csrf_field() }}
            	  
            	  
            		<div class="row">
            			<img src="/images/yukle.jpg" id="upfile1" style="cursor:pointer" />
                        <input type="file" id="file1"  name="stlFile" style="display:none" />
                         
                        
                        
            		</div>
            	</form>
                   
                  
                </div>
                
               
                
             
            </div>
            
        </div>
    </body>
    
<script>
    $(document).ready(function(){
            $("#upfile1").click(function () {
                $("#file1").trigger('click');
               
            });
            
            $("input:file").change(function (){
                  // var fileName = $(this).val();
                  //  alert(fileName);
                  $("#stlform").submit();
            });
            
    });
</script>    

    
    
    
</html>
