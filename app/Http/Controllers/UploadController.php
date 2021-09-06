<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\UploadRequest;
use Session;

class UploadController extends Controller
{

    public function uploadForm()
    {
        return view('upload.upload_form');
    }

    public function uploadSubmit(UploadRequest $request)
    {
        $product = Product::create($request->all());
    foreach ($request->photos as $photo) {
        $filename = $photo->store('photos');
        ProductsPhoto::create([
            'product_id' => $product->id,
            'filename' => $filename
        ]);
    }
    return 'Upload successful!';
    }

}