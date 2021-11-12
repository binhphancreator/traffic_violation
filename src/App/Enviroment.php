<?php

namespace GoSafer\App;

class Enviroment 
{
    private Application $app;
    private $env = array();
    public function __construct(Application $app)
    {
        $this->app = $app;
        $this->readFileEnviroment();
    }

    public function readFileEnviroment()
    {
        $envPath = $this->app->path('base')."/.env";
        if(!file_exists($envPath)) return;
        $file = fopen($envPath, "r");
        if($file) 
        {
            while (($line = fgets($file)) !== false) 
            {
                $data = trim($line);
                $data = explode("=", $line, 2);
                if(!empty($data[0]) && isset($data[1])) $this->env[$data[0]] = $data[1];
            }
            fclose($file);
        }
    }

    public function env($key, $default = null)
    {
        return $this->env[$key] ?? $default;
    }
}