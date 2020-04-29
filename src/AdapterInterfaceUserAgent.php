<?php


namespace Aleksandr\UserAgentParser;


interface AdapterInterfaceUserAgent
{
    public function parse(string $userAgent);

    public function getBrowser();

    public function getEngine();

    public function getOperatingSystem();

    public function getDevice();


}
