<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projet;
//use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    function uploadFile($req){
        return $req;
    }

    function downloadFile($id){
        $projet= Projet::where('id',$id)->first();
        
        return response()->download(public_path('storage/'.$projet['document']));
        


        
        //Storage::download($file)
        //echo 'download page';
        //return Storage::download($projet['document']);
    }
}
