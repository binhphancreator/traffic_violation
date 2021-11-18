<?php

namespace GoSafer\Storage;

class FileUpload extends File
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
        $this->resolveFilePath();
    }

    private function resolveFilePath()
    {
        $this->file['ext'] = pathinfo($this->name, PATHINFO_EXTENSION);
    }

    public function __get($key)
    {
        return $this->file[$key] ?? null;
    }

    public function save($filename)
    {
        $content = file_get_contents($this->tmp_name);
        self::put($filename, $content);
    }
}