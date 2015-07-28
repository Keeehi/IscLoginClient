<?php
namespace IscCtu\IscLoginClient;

class Client {
    private $host;
    private $path = "";
    /**
     * IscLoginClient constructor.
     */
    public function __construct($host)
    {
        $this->host = $host;
    }
    public function login()
    {
        header('Location: '.$this->getRequest());
        exit;
    }
    public function getRequest()
    {
        return 'https://'.$this->host.':'.$port.$uri;
    }
    public function validate()
    {
    }
}
