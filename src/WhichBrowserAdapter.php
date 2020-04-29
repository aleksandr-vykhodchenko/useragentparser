<?php


namespace Aleksandr\UserAgentParser;

use WhichBrowser\Parser;

class WhichBrowserAdapter implements AdapterInterfaceUserAgent
{
    protected $userAgent;
    protected $userAgentPars;



    public function parse(string $userAgent)
    {
        $this->userAgentPars= new \WhichBrowser\Parser($userAgent);
        return $this->userAgentPars;
    }

    public function getBrowser()
    {
        return $this->userAgentPars->browser->toString();
    }

    public function getEngine()
    {
        return $this->userAgentPars->engine->toString();
    }

    public function getOperatingSystem()
    {
        return $this->userAgentPars->os->toString();
    }

    public function getDevice()
    {
        return $this->userAgentPars->getType();
    }

}
