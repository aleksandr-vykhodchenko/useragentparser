<?php


namespace Aleksandr\UserAgentParser;


class UserAgentParser implements AdapterInterfaceUserAgent
{
    protected $userAgentParser;
    protected $userAgent;
    protected $userAgentPars;


    public function __construct(\UserAgentParser\Provider\WhichBrowser $userAgentParser)
    {
        $this->userAgentParser=$userAgentParser;
    }

    public function parse(string $userAgent)
    {
        $this->userAgentPars= $this->userAgentParser->parse($userAgent);
        return $this->userAgentPars;

    }

    public function getBrowser()
    {
        return $this->userAgentPars->getBrowser()->getName() . ' ' .  $this->userAgentPars->getBrowser()->getVersion()->getComplete();
    }

    public function getEngine()
    {
        return  $this->userAgentPars->getRenderingEngine()->getName() . ' ' .   $this->userAgentPars->getRenderingEngine()->getVersion()->getComplete();
    }

    public function getOperatingSystem()
    {
        return $this->userAgentPars->getOperatingSystem()->getName() . ' ' .   $this->userAgentPars->getOperatingSystem()->getVersion()->getComplete();
    }

    public function getDevice()
    {
        return $this->userAgentPars->getDevice()->getType();
    }

}
