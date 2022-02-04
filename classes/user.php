<?php

require('interfaces/UserInterface.php');

class user implements UserInterface
{

    private $request;

    public function __construct() {
        $this->getRequest($_REQUEST);
    }

    /**
     * @param mixed $request
     */
    public function setRequest($request): void
    {
        $this->request[] = $request;
    }

    public function getRequest($request)
    {
        $this->request = $request;
    }

    public function parseRequest()
    {
        return $this->request;
    }
}
