<?php

namespace GoSafer\Http;

use GoSafer\App\Application;
use GoSafer\Routing\Router;

class Handler 
{
    private Application $app;
    private Router $router;
    private ResponseInterface $response;
    public function __construct(Application $app, Router $router)
    {
        $this->app = $app;
        $this->router = $router;
    }
    public function handle(Request $request) {
        $this->bindRequest($request);
        $response = $this->router->dispatch($request->url(), $request->method());
        if(is_null($response))
        {
            $this->response = null;
        }
        else if(is_string($response))
        {
            $this->response = new BaseResponse(200, $response);
        }
        else if(is_array($response))
        {
            $this->response = new JsonResponse(200, $response);
        }
        else
        {
            $this->response = new BaseResponse(200, $response);
        }
        return $this;
    }

    public function bindRequest(Request $request)
    {
        $this->app->bind('request', $request);
    }

    public function send()
    {
        $this->response->code();
        $this->response->header();
        $this->response->render();
    }
}