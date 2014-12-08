<?php

/**
 * Device type detection (phone, tablet, desktop) based on user agent strings
 * 
 * @author Moritz Mertinkat <moritz@mertinkat.net>
 * @license http://opensource.org/licenses/LGPL-3.0
 */
class DeviceDetect
{
    /**
     * User agent string
     *
     * @var string
     */
    protected $userAgent = '';
    
    /**
     * Constructor
     *
     * @param string $userAgent User agent string
     */
    public function __construct($userAgent)
    {
        $this->userAgent = $userAgent;
    }
    
    /**
     * Checks whether we have a tablet
     *
     * @return boolean
     */
    public function isTablet()
    {
        if (preg_match('/ipad/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/android 3/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/android/i', $this->userAgent) && !preg_match('/mobile|opera mobi/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/firefox/i', $this->userAgent) && preg_match('/tablet/i', $this->userAgent)) {
            return true;
        }
        
        if (preg_match('/tablet pc/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/opera tablet/i', $this->userAgent)) {
            return true;
        }
        
        if (preg_match('/rim tablet/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/kindle fire|kindle\//i', $this->userAgent)) {
            return true;
        }

        return false;
    }

    /**
     * Checks whether we have a phone
     *
     * @return boolean
     */
    public function isPhone()
    {
        if (preg_match('/iphone/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/android 3/i', $this->userAgent)) {
            return false;
        }

        if (preg_match('/kindle fire|kindle\//i', $this->userAgent)) {
            return false;
        }

        if (preg_match('/mobile safari/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/firefox/i', $this->userAgent) && preg_match('/mobile/i', $this->userAgent)) {
            return true;
        }
        
        if (preg_match('/windows phone/i', $this->userAgent)) {
            return true;
        }

        if (preg_match('/opera mobi/i', $this->userAgent)) {
            return true;
        }

        return false;
    }
    
    /**
     * Checks whether we have a mobile device (phone or tablet)
     *
     * @return boolean
     */
    public function isMobile()
    {
        return $this->isPhone() || $this->isTablet();
    }
    
    /**
     * Checks whether we have a desktop device (or a mobile device in desktop mode)
     *
     * @return boolean
     */
    public function isDesktop()
    {
        return !$this->isMobile();
    }
}
