<div class="row">

<table class="tg">
    <tr>
        <th class="tg-yw4l">

            <div class="portfolio-image" id="pop">
                <a href="#" onclick="thumbnailFunction{{$printObject->id}}()">
                    <div class="sis-image-file-container" style="display: block;">
                       @include("objectimage")
                    </div>
                </a>

            </div>

        </th>
        <th class="tg-yw4l">
<form action="{{url('/')}}/printObjects/{{$printObject->id}}/update" method="post">
     {{ csrf_field() }}

            <b><h2>{{$printObject->name}}</h2></b>
            <br>
            <table>
              <tr>
                <th width='150px'>Miktar</th>
                <th><select name="quantity" onchange="this.form.submit()" id="quantity{{$printObject->id}}" style="width: 175px">
                 
                 
                @for ($i = 1; $i < 5; $i++)
                   
                   <option value="{{ $i }}" {{ ($printObject->quantity == $i ? "selected":"") }}>{{ $i }}</option>
                @endfor 
                


                    </select>
                </th>
              </tr>
              <tr>
                <td>Üretim Yöntemi   </td>
                <td><select name="yontem" id="yontem{{$printObject->id}}" onchange="this.form.submit()">
                <option value="FDM">FDM</option>
               
                    </select>
                </td>
              </tr>
              <tr>
                <td>Malzeme</td>
                <td><select name="malzeme" id="malzeme{{$printObject->id}}" onchange="this.form.submit()">
                <option value="ABS" {{ ($printObject->meterial == "ABS" ? "selected":"") }}>ABS</option>
                <option value="PLA" {{ ($printObject->meterial == "PLA" ? "selected":"") }}>PLA</option>
                <option value="PETG" {{ ($printObject->meterial == "PETG" ? "selected":"") }}>PETG</option>
                    </select>
                </td>
              </tr>
              <tr>
                <td>Renk :</td>
                <td><select name="renk" id="renk{{$printObject->id}}" onchange="this.form.submit()">
                <option value="Siyah" {{ ($printObject->color == "Siyah" ? "selected":"") }}>Siyah</option>
                <option value="Beyaz" {{ ($printObject->color == "Beyaz" ? "selected":"") }}>Beyaz</option>
                <option value="Yesil" {{ ($printObject->color == "Yeşil" ? "selected":"") }}>Yeşil</option>
                <option value="Kirmizi" {{ ($printObject->color == "Kırmızı" ? "selected":"") }}>Kırmızı</option>
                <option value="Mavi" {{ ($printObject->color == "Mavi" ? "selected":"") }}>Mavi</option>
                <option value="Turuncu" {{ ($printObject->color == "Turuncu" ? "selected":"") }}>Turuncu</option>
                <option value="Gumus" {{ ($printObject->color == "Gümüş" ? "selected":"") }}>Gümüş</option>
                <option value="Gri" {{ ($printObject->color == "Gri" ? "selected":"") }}>Gri</option>
                <option value="Sefaf" {{ ($printObject->color == "Şefaf" ? "selected":"") }}>Şefaf</option>
                <option value="Altin" {{ ($printObject->color == "Altın" ? "selected":"") }}>Altın</option>
                <option value="Pembe" {{ ($printObject->color == "Pembe" ? "selected":"") }}>Pembe</option>
                <option value="Mor" {{ ($printObject->color == "Mor" ? "selected":"") }}>Mor</option>
                <option value="Sari" {{ ($printObject->color == "Sarı" ? "selected":"") }}>Sarı</option>
                <option value="RenkFarketmez" {{ ($printObject->color == "RenkFarketmez" ? "selected":"") }}>Renk Farketmez</option>
                    </select>
                </td>
              </tr>
            </table>
            <br>

            <a href="javascript:toggleFunction{{$printObject->id}}()">Detay</a>
            <br><br>
            <div id='details{{$printObject->id}}' style="display:none">
            
                <table>
                  <tr>
                    <th width='150px'>Doluluk</th>
                    <th><select name="infill" id="infill{{$printObject->id}}" onchange="this.form.submit()">
                        <option value="5" {{ ($printObject->infill == "5" ? "selected":"") }}>5%</option>
                        <option value="10" {{ ($printObject->infill == "10" ? "selected":"") }}>10%</option>
                        <option value="15" {{ ($printObject->infill == "15" ? "selected":"") }}>15%</option>
                        <option value="20" {{ ($printObject->infill == "20" ? "selected":"") }}>20%</option>
                        <option value="25" {{ ($printObject->infill == "25" ? "selected":"") }}>25%</option>
                        <option value="30" {{ ($printObject->infill == "30" ? "selected":"") }}>30%</option>
                        <option value="35" {{ ($printObject->infill == "35" ? "selected":"") }}>35%</option>
                        <option value="40" {{ ($printObject->infill == "40" ? "selected":"") }}>40%</option>
                        <option value="45" {{ ($printObject->infill == "45" ? "selected":"") }}>45%</option>
                        <option value="50" {{ ($printObject->infill == "50" ? "selected":"") }}>50%</option>
                        <option value="55" {{ ($printObject->infill == "55" ? "selected":"") }}>55%</option>
                        <option value="60" {{ ($printObject->infill == "60" ? "selected":"") }}>60%</option>
                        <option value="65" {{ ($printObject->infill == "65" ? "selected":"") }}>65%</option>
                        <option value="70" {{ ($printObject->infill == "70" ? "selected":"") }}>70%</option>
                        <option value="75" {{ ($printObject->infill == "75" ? "selected":"") }}>75%</option>
                        <option value="80" {{ ($printObject->infill == "80" ? "selected":"") }}>80%</option>
                        <option value="85" {{ ($printObject->infill == "85" ? "selected":"") }}>85%</option>
                        <option value="90" {{ ($printObject->infill == "90" ? "selected":"") }}>90%</option>
                        <option value="95" {{ ($printObject->infill == "95" ? "selected":"") }}>95%</option>
                        <option value="100" {{ ($printObject->infill == "100" ? "selected":"") }}>100%</option>
                    </select>
                    </th>
                  </tr>
                  <tr>
                    <td>Katman Kanlınlığı  </td>
                    <td><select name="layer_height" id="layer_height{{$printObject->id}}" onchange="this.form.submit()">
                            <option value="0.2" {{ ($printObject->layer_height == "0.2" ? "selected":"") }}>0.2 mm</option>
                            <option value="0.1" {{ ($printObject->layer_height == "0.1" ? "selected":"") }}>0.1 mm</option>
                        </select></td>
                  </tr>
                </table>
                
                
            </div>

            
            
            
             <h3><b>Fiyat:  <label class='clsMyLabels' id="fiyatLabel{{$printObject->id}}">  {{$printObject->price}}</label>  TL</b>
             
           
           
            <br><br>

            <a href="printObjects/{{$printObject->id}}/delete" type="button" class="btn btn-default btn-lg">
                <i class="fa fa-times" aria-hidden="true"></i> Sil
            </a>

            <hr>
</form>
        </th>
    </tr>
</table>

</div>

<script>
function toggleFunction{{$printObject->id}}() {
    var x = document.getElementById('details{{$printObject->id}}');
    if (x.style.display === 'none') {
        x.style.display = 'block';
    } else {
        x.style.display = 'none';
    }
}
/*
function thumbnailFunction{{$printObject->id}}() {

$.ajax({
  type: "POST",
  beforeSend: function(request) {
    request.setRequestHeader("api-key", "c89d0db5-feb1-4ae2-bd57-16f75e3851a6");
  },
  url: "https://api.cad.ai/api/v1/thumbnail",
  data: {'width':'500','height':'500','x_rotate_angle':'10','y_rotate_angle':'','z_rotate_angle':'','file_url':'https://github.com/getcadai/files/raw/master/BottleOpener.stl'},
  success: function(msg) {
    alert(msg);
  }
});

}

*/

$( document ).ready(function() {
  // getThumbnail{{$printObject->id}}();
});

/*
function getThumbnail{{$printObject->id}}() {

var file = "{{$printObject->stl_file_path}}";    
    
file = file.substr(0, file.lastIndexOf(".")) + ".png";
    
document.getElementById("objectImage{{$printObject->id}}").src = "http://104.236.41.14/" + file;
 

 
}
*/
</script>


