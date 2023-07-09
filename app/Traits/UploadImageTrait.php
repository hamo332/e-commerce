<?php
namespace App\Traits;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;

trait UploadImageTrait
{
    public function uploadImage(Request $request, $folderName)
    {
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->store($folderName, 'mohamed');
        return $path;
    }
}

?>