<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Storage;
use GuzzleHttp;

use Kordy\Ticketit\Models\Ticket;
use App\PrintObject;
use Auth;
use Session;
use Route;



    function newUploadTicket($printObject)
    {    
    
    
        $ticket = new Ticket();

        $ticket->subject ="Yeni Dosya Yüklemesi";

        $ticket->setPurifiedContent("isim: ".$printObject->name."     path: ". $printObject->stl_file_path);

        $ticket->priority_id = 1;
        $ticket->category_id = 1;

        $ticket->status_id = 1;
        $ticket->user_id = 1; //Nuri Erginer
        $ticket->autoSelectAgent();

        $ticket->save();
    
    
    }
    

class S3ImageController extends Controller
{

    /**
    * Create view file
    *
    * @return void
    */
    public function imageUpload()
    {
    	return view('image-upload');
    }

    /**
    * Manage Post Request
    *
    * @return void
    */
    

    
 
    
 
    
    
    public function imageUploadPost(Request $request)
    {
    	
       
       $StlFileName = time().'.'.$request->stlFile->getClientOriginalExtension(); //random filename
        
        
        $StlFileRealName = $request->stlFile->getClientOriginalName(); //uploaded filename
        $stlFile = $request->file('stlFile'); //get request file
    
        $disk = Storage::disk('s3');
        $disk->put($StlFileName, fopen($stlFile, 'r+'));  //sream to s3
        
    //    $StlFileName = Storage::disk('s3')->url($StlFileName);
        
            // create PrintObject from uploaded file
       try {
        $printObject = new PrintObject;
        $printObject->name = $StlFileRealName;
        $printObject->stl_file_path = $StlFileName;
        
       
        if (Auth::guest()){ 
            $printObject->user_id =Session::getId();
        } else {
            $printObject->user_id = Auth::id();
        }    
     
        $printObject->save();
        
        newUploadTicket($printObject);
        
       } catch (Illuminate\Database\QueryException $e){
            $errorCode = $e->errorInfo[1];
        
           $msg='Yüklemede hata Oluştu'; //buraya sonra bak
        }
        
        

    //	 return response()->json('{"data":"'. $printObject->id . '"}');
    	 return response()->json([
             'id' => $printObject->id
              
            ]);
    	 	
    		
    		
    }
    
    
 
 
  
}