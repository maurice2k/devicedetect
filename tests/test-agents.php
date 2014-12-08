<?php

$useragent_devicetype_lookup = [
    
    // iPhone + iPod
    'Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5' => 'phone',
    'Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5' => 'phone',

    
    // iPad
    'Mozilla/5.0 (iPad; U; CPU OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5' => 'tablet',
  
  
    // IE10 on Microsoft Surface
    'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)' => 'desktop',
    'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0; Touch)' => 'desktop',
    
    
    // Windows Phone
    'Mozilla/4.0 (compatible; MSIE 7.0; Windows Phone OS 7.0; Trident/3.1; IEMobile/7.0; LG; GW910)' => 'phone',
    'Mozilla/5.0 (compatible; MSIE 9.0; Windows Phone OS 7.5; Trident/5.0; IEMobile/9.0; SAMSUNG; SGH-i917)' => 'phone',
    'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; NOKIA; Lumia 920)' => 'phone',
    'Mozilla/5.0 (Windows Phone 8.1; ARM; Trident/7.0; Touch; rv:11; IEMobile/11.0; NOKIA; Lumia 928) like Gecko' => 'phone',
    
    
    // Android Phone
    'Mozilla/5.0 (Linux; U; Android 4.0.3; de-ch; HTC Sensation Build/IML74K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Mobile Safari/534.30' => 'phone',
    'Mozilla/5.0 (Linux; Android 5.0; Nexus 5 Build/LPX13D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.102 Mobile Safari/537.36' => 'phone',
    'Mozilla/5.0 (Linux; Android 4.1.1; Galaxy Nexus Build/JRO03O) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Mobile Safari/535.19' => 'phone',
    'Mozilla/5.0 (Android; Mobile; rv:16.0) Gecko/16.0 Firefox/16.0' => 'phone',
    
    
    // Android Tablet
    'Mozilla/5.0 (Linux; Android 4.1.1; Nexus 7 Build/JRO03S) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.166 Safari/535.19' => 'tablet',
    'Mozilla/5.0 (Android; Tablet; rv:16.0) Gecko/16.0 Firefox/16.0' => 'tablet',
    
    
    // Windows Desktop
    'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2236.0 Safari/537.36' => 'desktop',
    'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko/20100101 Firefox/33.0' => 'desktop',
    'Mozilla/5.0 (Windows NT 6.1; Win64; x64; Trident/7.0; rv:11.0) like Gecko' => 'desktop',
    
    
    // Apple Desktop
    'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2240.0 Safari/537.36' => 'desktop',
    
    
    // Blackberry Phone
    'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.346 Mobile Safari/534.11+' => 'phone',
    'Mozilla/5.0 (BB10; Kbd) AppleWebKit/537.10+ (KHTML, like Gecko) Version/10.1.0.4633 Mobile Safari/537.10+' => 'phone',
    'Mozilla/5.0 (BB10; Touch) AppleWebKit/537.10+ (KHTML, like Gecko) Version/10.0.9.2372 Mobile Safari/537.10+' => 'phone',
    
    // Blackberry Tablet
    'Mozilla/5.0 (PlayBook; U; RIM Tablet OS 2.1.0; en-US) AppleWebKit/536.2+ (KHTML like Gecko) Version/7.2.1.0 Safari/536.2+' => 'tablet',
    
    
    // Firefox OS Phone
    'Mozilla/5.0 (Mobile; rv:26.0) Gecko/26.0 Firefox/26.0' => 'phone',
        
    // Firefox OS Tablet
    'Mozilla/5.0 (Tablet; rv:26.0) Gecko/26.0 Firefox/26.0' => 'tablet',

    
    // Old Kindle Monochrome
    'Mozilla/5.0 (Linux; U; en-US) AppleWebKit/528.5+ (KHTML, like Gecko, Safari/528.5+) Version/4.0 Kindle/3.0 (screen 600×800; rotate)' => 'tablet',
    
    // Some Kindle Fire Tablet
    'Mozilla/5.0 (Linux; U; Android 2.3.4; en-us; Kindle Fire Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1' => 'tablet',
    
    // Amazon Silk Mobile
    'Mozilla/5.0 (Linux; U; Android 4.2.2; en-us; KFTHWI Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Silk/3.22 like Chrome/34.0.1847.137 Mobile Safari/537.36' => 'phone',

    // Fire Phone
    'Mozilla/5.0 (Linux; U; Android 4.2; xx-xx; SD4930UR Build/JDQ39) AppleWebKit/535.19 (KHTML, like Gecko) Silk/3.21 like Chrome/31.0.1650.59 Mobile Safari/535.19 Silk-Accelerated=true' => 'phone',
    
    // Amazon Silk Tablet
    'Mozilla/5.0 (Linux; U; Android 4.2.2; en-us; KFTHWI Build/JDQ39) AppleWebKit/537.36 (KHTML, like Gecko) Silk/3.22 like Chrome/34.0.1847.137 Safari/537.36' => 'tablet',
    
    // Kindle Fire 1st Gen Mobile
    'Mozilla/5.0 (Linux; U; Android 2.3.4; en-us; Silk/1.0.13.81_10003810) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1 Silk-Accelerated=true' => 'phone',
    
    // Kindle Fire 1st Gen Desktop
    'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us; Silk/1.0.13.81_10003810) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16 Silk-Accelerated=true' => 'desktop',
    
    
    // Opera Mobile
    'Opera/12.02 (Android 4.1; Linux; Opera Mobi/ADR-1111101157; U; en-US) Presto/2.9.201 Version/12.02' => 'phone',
        
];


require_once '../library/DeviceDetect.php';

$errors = 0;

echo sprintf("Testing %d user agent strings...\n", count($useragent_devicetype_lookup));

foreach ($useragent_devicetype_lookup as $useragent => $devicetype) {
    
    $device_detect = new DeviceDetect($useragent);
   
    $detected_devicetype = 'desktop';  // default
    
    $is_phone = $device_detect->isPhone();
    $is_tablet = $device_detect->isTablet();
    
    if ($is_phone && $is_tablet) {
        echo "[ERR] Detected 'phone' AND 'tablet' for '{$useragent}'\n";
        $errors++;
        continue;
    
    } else if ($is_phone && !$is_tablet) {
        $detected_devicetype = 'phone';
        
    } else if (!$is_phone && $is_tablet) {
        $detected_devicetype = 'tablet';
        
    }

    if ($devicetype != $detected_devicetype) {
        echo "[ERR] Detected '{$detected_devicetype}' but should be '{$devicetype}' for '{$useragent}'\n";
        $errors++;
        continue;
    }

}

if ($errors == 0) {
    echo "[PASS]\n";
} else {
    echo "[FAIL] - {$errors} error(s)!\n";
}
