<?php

namespace Qinyi\HwOcr;



class OcrClient
{
    public $accessKey='';
    public $accessSecret='';
    public $projectId = '';
    public function __construct()
    {

    }



    public function cambodianOCRByUrl($url)
    {
        $data = [
            "url"=>$url
        ];
        return $this->cambodianOCRRequest($data);
    }

    public function cambodianOCRByBase64($base64Img)
    {
        $data = [
            "image"=>$base64Img
        ];
        return $this->cambodianOCRRequest($data);
    }

    private function cambodianOCRRequest($data)
    {
        $signer = new Signer();
        $signer->Key = $this->accessKey;
        $signer->Secret = $this->accessSecret;
        $uri = $this->getCambodianOCRURI();
        $request = new Request('POST',$uri);

        $request->body = json_encode($data);
        $request->headers = array(
            'content-type' => 'application/json',
        );
        return $signer->Sign($request);
    }
    private function getCambodianOCRURI()
    {
        $uri = 'https://ocr.ap-southeast-3.myhuaweicloud.com/v2/%s/ocr/cambodian-idcard';
        return sprintf($uri,$this->projectId);
    }
}