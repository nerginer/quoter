<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\Redirect;
use Session;
use Auth;

use App\PrintObject;




class PrintObjectController extends Controller
{
    //
    
    
      /**
     * Create a new controller instance.
     *
     * @return void
     
    public function __construct()
    {
        $this->middleware('auth');
    }

 */

        public function index()
    {
        
        
        
        if (Auth::guest()){ 
            $user= Session::getId();
        } else {
            $user = Auth::id();
        }    
        
        
        $printObjects = PrintObject::All()->where('user_id', $user);
        
        
        
        
        return view('printObjects.index',array('printObjects' => $printObjects));
     
    }
    
         public function deletePrintObject($PrintObjectId)
    {
       
       
       
       $PrintObject = PrintObject::findOrFail($PrintObjectId);
       
      
       
       if ($PrintObject!= Null) $PrintObject->forceDelete();
       
       // redirect
            Session::flash('message', 'Model Başarı ile Silindi!');
            return Redirect::to('/home');
       
       //return 'device: '. $device->name . '<br> occupant: ' . $occupant->name;
    }
    
    
    public function updatePrintObject($PrintObjectId,Request $request)
    {
       
 //      dd($request);
      
      $PrintObject = PrintObject::findOrFail($PrintObjectId);
      
//      dd($PrintObject->base_price);
      
     
      if ($PrintObject!= Null) {
          
          $PrintObject->quantity = $request->quantity;
          $PrintObject->production_method = $request->yontem;
          $PrintObject->meterial = $request->malzeme;
          $PrintObject->color = $request->renk;
          $PrintObject->infill = $request->infill;
          $PrintObject->layer_height = $request->layer_height;
          
          
          if ($PrintObject->meterial =="PLA") {
            $meterialMultiplier = 1.2;
          } else {
            $meterialMultiplier = 1;
          }
          
          if (($PrintObject->color =="Altın") || ($PrintObject->color =="Şefaf")) {
            $colorMultiplier = 1.5;
          } else {
            $colorMultiplier = 1;
          }
          
          if ($PrintObject->color =="RenkFarketmez") {
            $colorMultiplier = 0.9;
          } else {
            $colorMultiplier = 1;
          }
          
          if ((integer)($PrintObject->infill) >= 50) {
            $infillMultiplier = 1.5;
          } else {
            $infillMultiplier = 1;
          }
          
           if ((float)($PrintObject->layer_height) < 0.2) {
            $layer_heightMultiplier = 1.5;
          } else {
            $layer_heightMultiplier = 1;
          }
          
          
       
          
          
        //diğer updateler buraya gelecek
          
        //price calculation 
          $PrintObject->price =(string)((float)($PrintObject->base_price) * (float)($PrintObject->quantity)*$meterialMultiplier*$colorMultiplier*$infillMultiplier*$layer_heightMultiplier);
          

          $PrintObject->save();
      }//if
      
       
        if (Auth::guest()){ 
            $user= Session::getId();
        } else {
            $user = Auth::id();
        }    
        
        
       $printObjects = PrintObject::All()->where('user_id', $user);
        
       
       return Redirect::to('home')->with('printObjects.index',array('printObjects' => $printObjects));
    }
    
    
    
    public function progressPrintObject($printObjectId)
    {
     
     //dd($PrintObjectId);
      $printObject = PrintObject::findOrFail($printObjectId);
      return view('progress',array('printObject' =>  $printObject));
      
     
        
    }
    
    public function analizePrintObject($printObjectId)
    {
     
     //dd($PrintObjectId);
      $printObject = PrintObject::findOrFail($printObjectId);
      $StlFileName = $printObject->stl_file_path;
      //fiyat api call
      $json = json_decode(file_get_contents('http://104.236.41.14:4000/api/stl?stlfile='.$StlFileName), true);
      
      $printObject->price=$json['fiyat'];
      
      
      $printObject->save();
      
   //    return Redirect::to('home')->with('printObjects.index',array('printObjects' => $printObjects));
      
     
      
      return response()->json([
             'id' => $printObject->id
              
          ]);
      
     
        
    }
    
  
    
}
