<?php
//
// This code and all components (c) Copyright 2006 - 2016, Wowza Media Systems, LLC. All rights reserved.
// This code is licensed pursuant to the Wowza Public License version 1.0, available at www.wowza.com/legal.
//
namespace Com\Wowza;

use Com\Wowza\Entities\Application\Helpers\Settings;

class Instance extends Application
{
    private $app_name        = 'live';
    private $version         = '';
    private $serverName      = '';
    private $inst_name       = '_definst_';
    private $stream_name     = null;
    private $incomingStreams = [];
    private $outgoingStreams = [];
    private $recorders       = [];
    private $streamGroups    = [];

    public function __construct(
        Settings $settings,
        $app_name    = 'live',
        $inst_name   = '_definst_',
        $stream_name = null
    ) {
        parent::__construct($settings, $app_name);

        $this->app_name    = $app_name;
        $this->inst_name   = $inst_name;
        $this->stream_name = $stream_name;

        $this->restURI = $this->getRestURI() ."/instances/{$inst_name}";
    }

    public function get()
    {
        $this->_skip['version']         = true;
        $this->_skip['serverName']      = true;
        $this->_skip['name']            = true;
        $this->_skip['incomingStreams'] = true;
        $this->_skip['outgoingStreams'] = true;
        $this->_skip['recorders']       = true;
        $this->_skip['streamGroups']    = true;

        return $this->sendRequest($this->preparePropertiesForRequest(self::class), [], self::VERB_GET);
    }

    public function getAll()
    {
        $this->_skip['version']         = true;
        $this->_skip['serverName']      = true;
        $this->_skip['name']            = true;
        $this->_skip['incomingStreams'] = true;
        $this->_skip['outgoingStreams'] = true;
        $this->_skip['recorders']       = true;
        $this->_skip['streamGroups']    = true;

        $host            = $this->getHost();
        $server_instance = $this->getServerInstance();
        $vhost_instance  = $this->getVHostInstance();
        $app_name        = $this->app_name;
        $inst_name       = $this->inst_name;

        $this->restURI = $host . "/servers/" . $server_instance . "/vhosts/" . $vhost_instance . "/applications/" . $app_name . "/instances/" . $inst_name;

        return $this->sendRequest($this->preparePropertiesForRequest(self::class), [], self::VERB_GET);
    }

    public function getRestURI()
    {
        return $this->restURI;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCurrentIncomingStreamStatistics()
    {
        $this->_skip['version']         = true;
        $this->_skip['serverName']      = true;
        $this->_skip['name']            = true;
        $this->_skip['incomingStreams'] = true;
        $this->_skip['outgoingStreams'] = true;
        $this->_skip['recorders']       = true;
        $this->_skip['streamGroups']    = true;

        $host            = $this->getHost();
        $server_instance = $this->getServerInstance();
        $vhost_instance  = $this->getVHostInstance();
        $app_name        = $this->app_name;
        $inst_name       = $this->inst_name;
        $stream_name     = $this->stream_name;

        $this->restURI = $host . "/servers/" . $server_instance . "/vhosts/" . $vhost_instance . "/applications/" . $app_name . "/instances/" . $inst_name . "/incomingstreams/" . $stream_name . "/monitoring/current";

        return $this->sendRequest($this->preparePropertiesForRequest(self::class), [], self::VERB_GET);
    }

}

