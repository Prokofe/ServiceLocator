<?php

class MessageServiceLocator
{

    private $services = [];

    public function registerService($name, $service)
    {
        $this->services[$name] = $service;
    }

    public function get($name)
    {
        return $this->services[$name];
    }

    public function has($name)
    {
        return isset($this->services[$name]);
    }

}