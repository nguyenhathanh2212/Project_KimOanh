<?php 
namespace App\Traits;

use Carbon\Carbon;
use Storage;

trait processFile {
    public function upLoadFile($request, $name, $pathUpload)
    {
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;
        $file = $request->file($name);
        $filePath = $file->store($pathUpload . '/' . $year . '/' . $month);

        return $filePath;
    }

    public function upLoadFile2($file, $pathUpload)
    {
        $now = Carbon::now();
        $year = $now->year;
        $month = $now->month;
        $filePath = $file->store($pathUpload . '/' . $year . '/' . $month);

        return $filePath;
    }

    public function deleteFile($fileName)
    {
        if (Storage::exists($fileName)) {
            Storage::delete($fileName);
        }
    }
}
