<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\FileUpload;

class GeneralMod extends Controller
{
    public function uploadFile(Request $request)
    {
        $request->validate([
            'file_name' => 'required|string|max:200',
            'cropped_image' => 'required|string',
        ]);

        // Extract image data from base64
        $imageData = $request->cropped_image;
        $imageParts = explode(";base64,", $imageData);
        $imageBase64 = base64_decode($imageParts[1]);
        $fileName = uniqid() . '.png';
        $filePath = 'uploads/' . $fileName;

        // Store the file locally
        Storage::disk('public')->put($filePath, $imageBase64);

        // Save to database
        $fileUpload = new FileUpload();
        $fileUpload->file_name = $request->file_name;
        $fileUpload->file_img = $filePath;
        $fileUpload->save();

        return back()->with('success', 'File uploaded successfully!');
    }
}
