<?php

namespace OCR\Tests;
use PHPUnit\Framework\TestCase;
use Qinyi\HwOcr\OcrClient;
class OcrClientTest  extends TestCase
{
    public function testCambodianOCRByUrl()
    {
        $client = new OcrClient();
        $client->accessKey = 'xxx';
        $client->accessSecret = 'xxx';
        $client->projectId = 'xxxx';
        $url = 'xxx';
        $resp = $client->cambodianOCRByUrl($url);
        print_r($resp);
    }
}