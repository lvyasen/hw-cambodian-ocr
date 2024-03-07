<?php

namespace Qinyi\HwOcr;



use AlibabaCloud\SDK\Imm\V20200930\Imm;
use AlibabaCloud\SDK\Imm\V20200930\Models\DetectImageScoreRequest;
use \Exception;
use Darabonba\OpenApi\Models\Config;
class ImmClient
{
    public $accessKeyId='';
    public $accessKeySecret='';
    public $endpoint = '';
    public $projectName='';
    public $bucket = '';
    private static $client ;
    public  function createClient(){
        $this->validate();
        if (!(self::$client instanceof self)) {
            $config = new Config([
                "accessKeyId" => $this->accessKeyId,
                "accessKeySecret" => $this->accessKeySecret
            ]);
            $config->endpoint = $this->endpoint;
            $client =  new Imm($config);
            self::$client = $client;
        }
        return self::$client;
    }

    public function __construct()
    {

    }
    public function validate()
    {
        $vars = get_object_vars($this);
        foreach ($vars as $k => $v) {
            if (empty($v)) {
                throw new \InvalidArgumentException("{$k} is required.");
            }
        }
    }
    public  function ImgScore($imgUrl)
    {
        $fileName = basename($imgUrl);
        $imgURI = 'oss://'.$this->bucket.'/'.$fileName;
        $client = $this->createClient();
        $imgScoreRequest = new DetectImageScoreRequest([
            'projectName'=>$this->projectName,
            'sourceURI'=>$imgURI
        ]);
        $returnRes = [
            'status'=>200,
            'score'=>0,
            'msg'=>''
        ];
        try {
            $resp = $client->detectImageScore($imgScoreRequest);
            $resp =  json_decode(json_encode ( $resp ) , true);
            $returnRes['status'] = $resp['statusCode'];
            $returnRes['score'] = $resp['body']['imageScore']['overallQualityScore'];
            if ($resp['statusCode']==200){
                $returnRes['msg'] = '获取成功';
            }
        }catch (Exception  $e){
            $returnRes['status']=500;
            $returnRes['msg'] = $e->getMessage();
        }
        return $returnRes;
    }

}