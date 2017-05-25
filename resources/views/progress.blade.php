@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           
            <div class="panel panel-default">
                
               
                
                
                <div class="panel-heading">Inceleniyor...</div>

                <div class="panel-body">
                    
                     <div class="progress progress-striped active">
                        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    
             
                    <div style="width: 100%; overflow: hidden;">
                        <div style="width: 10px; float: left;"> <div id="div2a" style="display:none;"> <i class="fa fa-check" aria-hidden="true"></i></div> </div>
                        <div style="margin-left: 20px;"><div id="div2" style="display:none;"><b>{{$printObject->name}}</b> STL Dosyasi Inceleniyor...</div></div>
                    </div>
                    <div style="width: 100%; overflow: hidden;">
                        <div style="width: 10px; float: left;"> <div id="div3a" style="display:none;"> <i class="fa fa-check" aria-hidden="true"></i></div> </div>
                        <div style="margin-left: 20px;"><div id="div3" style="display:none;">STL Dosyasi Resmi Olusturuluyor...</div></div>
                    </div>
                    <br>
                    <div id="div4" style="display:none; color:green;"><b>Islemler Basariyla Tamamlandi</b></div>
                   
                    
                    
                    
                    
                </div>
                
                
            </div>
            
          
            
            
        </div>
    </div>
</div>


                  @include('myJS') 

@endsection