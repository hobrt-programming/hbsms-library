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

$response = $sms->newSms("hello from api ...", "45221", 7);

echo "<pre>";

print_r(json_decode($response->getBody()));

```
