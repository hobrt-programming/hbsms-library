# hbsms-library
This is a simple library to interact with hbsms.com api and send sms .

```
composer requier hobrt/hbsms
```


```
<?php

require __DIR__."/vendor/autoload.php";

use hobrt\Hbsms;

$sms = new Hbsms("Your token");

$phone_number = "0678173186";

$message = "test first message ... ";

$device_id = 1;

$response = $sms->newSms($message, $phone_number, $device_id);

print_r(json_decode($response->getBody()));
```
