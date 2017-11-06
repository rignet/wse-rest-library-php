<?php
namespace Com\Wowza\Entities\Application;

use Com\Wowza\entities\Entity;

class LiveEncoderConfigVideoSettings extends Entity
{
    private $framerate = '';
    private $width     = '';
    private $height    = '';
    private $bitrate   = '';

    public function __construct(
        $framerate = '',
        $width     = '',
        $height    = '',
        $bitrate   = ''
    )
    {
        $this->framerate = $framerate;
        $this->width     = $width;
        $this->height    = $height;
        $this->bitrate   = $bitrate;
    }

    // Getters
    public function getFramerate()
    {
        return $this->framerate;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getBitrate()
    {
        return $this->bitrate;
    }

    // Setters
    public function setFramerate($ = '')
    {
        $this->framerate = $framerate;
    }

    public function setWidth($ = '')
    {
        $this->width = $width;
    }

    public function setHeight($ = '')
    {
        $this->height = $height;
    }

    public function setBitrate($ = '')
    {
        $this->bitrate = $bitrate;
    }

}

