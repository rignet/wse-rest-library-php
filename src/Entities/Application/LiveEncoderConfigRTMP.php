<?php
namespace Com\Wowza\Entities\Application;

use Com\Wowza\entities\Entity;

class LiveEncoderConfigRTMP extends Entity
{
    private $url            = "";
    private $backup_url     = "";
    private $stream         = "";
    private $username       = "";
    private $password       = "";

    public function __construct(
        $url        = '',
        $backup_url = '',
        $stream     = '',
        $username   = '',
        $password   = ''
    )
    {
        $this->url        = $url;
        $this->backup_url = $backup_url;
        $this->stream     = $stream;
        $this->username   = $username;
        $this->password   = $password;
    }

    // Getters
    public function getUrl()
    {
        return $this->url;
    }

    public function getBackupUrl()
    {
        return $this->backup_url;
    }

    public function getStream()
    {
        return $this->stream;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // Setters
    public function setUrl($url = "")
    {
        $this->url = $url;
    }

    public function setBackupUrl($backup_url = "")
    {
        $this->backup_url = $backup_url;
    }

    public function setStream($stream = "")
    {
        $this->stream = $stream;
    }

    public function setUsername($username = "")
    {
        $this->username = $username;
    }

    public function setPassword($password = "")
    {
        $this->password = $password;
    }

}

