<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Upload;
use ZipArchive;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class AdminController extends Controller
{
    //

      public function index() {
        $uploads = Upload::latest()->get();
        return view('admin.index', compact('uploads'));
    }

    public function downloadAll() {
        $uploads = Upload::all();
        $zipFileName = 'all_uploads.zip';
        $zip = new ZipArchive;
        $zip->open(public_path($zipFileName), ZipArchive::CREATE | ZipArchive::OVERWRITE);

        foreach($uploads as $upload){
            $filePath = storage_path('app/public/'.$upload->file_path);
            $zip->addFile($filePath, basename($filePath));
        }

        $zip->close();
        return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
    }
}
