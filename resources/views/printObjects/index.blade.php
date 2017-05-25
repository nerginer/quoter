@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-10 col-md-offset-1">
            @include('upload2')

            <div class="panel panel-default">
               
                <div class="panel-heading"><h2>Modellerin </h2></div>
                    
                <div class="panel-body">
                    
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    
                    
                    
                    
                    @foreach ($printObjects as $printObject)                   
                                        
                       @include('PrintObjectCard') 
                       
                    @endforeach

</div>

</div>


                <div class="panel panel-default">
               
                    <div class="panel-heading"><h2>Toplam </h2>
                    </div>
                    <div class="panel-body">
                        <h3><b>Fiyat:  <label id="grandTotalLabel">  10</label>  TL</b>
                        <br> <br>
                        <button type="button" class="btn btn-primary btn-lg" id="order">Siparişi Tamamla</button> 
                    </div> 
                    
                </div>



</div></div>
                       
                       
                       
                    </div> 
                </div>
            </div>
            
            
        </div>
    </div>
</div>


<script>
$( document ).ready(function() {
   grendTotalpriceUpdate();

});

function grendTotalpriceUpdate() {
   
    
      var labels = $(".clsMyLabels");
      var total = 0; 
      $.each(labels, function(index,lbl){
        
        total += parseFloat($(lbl).text());
      });
      
       document.getElementById('grandTotalLabel').innerHTML = total.toFixed(2);


   
}



</script>
@endsection


