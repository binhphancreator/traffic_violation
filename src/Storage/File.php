<?php

namespace GoSafer\Storage;

class File 
{
    public static function put($filename, $content)
    {
        $fullpath = app('app')->path('base').'/storage/file/'.$filename;
        file_put_contents($fullpath, $content);
    }

    public static function delete($filename)
    {
        $fullpath = app('app')->path('base').'/storage/file/'.$filename;
        if(file_exists($fullpath))
            return unlink($fullpath);
        return false;
    }
}