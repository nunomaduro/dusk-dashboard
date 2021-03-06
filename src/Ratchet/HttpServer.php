<?php

namespace BeyondCode\DuskDashboard\Ratchet;

use Ratchet\Http\HttpServerInterface;

class HttpServer extends \Ratchet\Http\HttpServer
{
    public function __construct(HttpServerInterface $component)
    {
        parent::__construct($component);

        $this->_httpServer = $component;
        $this->_reqParser = new HttpRequestParser;
    }
}
