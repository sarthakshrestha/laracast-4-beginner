<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Blog
{
    public static function all(){
        $files =  File::files(resource_path("blogs/"));

        return array_map(fn($file) => $file->getContents(), $files);    
    }
    public static function find($slug){

        base_path();

        if(! file_exists($path =resource_path("blogs/{$slug}.html"))){
            return view('404');
//            throw new ModelNotFoundException();
//            // return redirect('/');
        }

       return cache()->remember("blogs.{$slug}", 1200, fn() => file_get_contents($path));
    }
}
