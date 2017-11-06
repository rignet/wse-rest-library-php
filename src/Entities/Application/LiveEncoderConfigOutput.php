<?php
namespace Com\Wowza\Entities\Application;

use \Com\Wowza\Entities\Entity;

class LiveEncoderConfigOutput extends Entity
{
    public $rtmp;
    public $video;

    public function __construct(Array $rtmpConfig = [], Array $videoConfig = [])
    {
        $this->rtmp  = new \Com\Wowza\Entities\LiveEncoderConfigRTMP($rtmpConfig);
        $this->video = new \Com\Wowza\Entities\LiveEncoderConfigVideoSettings($videoConfig);
    }

    public function getRtmp()
    {
        return $this->rtmp;
    }

    public function getVideo()
    {
        return $this->video;
    }

}

