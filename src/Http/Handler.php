<?php

namespace GoSafer\Http;

use GoSafer\App\Application;
use GoSafer\Renderer\View;
use GoSafer\Routing\Router;
use RuntimeException;

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
        if(is_string($response) || is_null($response))
        {
            $this->response = new BaseResponse(200, $response);
        }
        else if(is_array($response))
        {
            $this->response = new JsonResponse(200, $response);
        }
        else if($response instanceof View)
        {
            $this->response = new ViewResponse(200, $response);
        }
        else if($response instanceof BaseResponse)
        {
            $this->response = $response;
        }
        else
        {
            throw new RuntimeException('The response is not supported');
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