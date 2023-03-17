<?php

namespace App\Http\Services;

class UploadService
{
    public function store($request)
    {
        if ($request->hasFile('file')) { //Kiểm tra file tồn tại
            try {
                $name = $request->file('file')->getClientOriginalName();

                // Trả về link ảnh
                $pathFull = 'uploads/' . date("Y/m/d");
                $path = $request->file('file')->storeAs(
                    'public/' . $pathFull,
                    $name
                );

                // dd($path);
                return '/storage/' . $pathFull . '/' . $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }
}
