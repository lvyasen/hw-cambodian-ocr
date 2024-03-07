<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class RefreshWebofficeTokenRequest extends Model
{
    /**
     * @example 99d1b8b478b641c1b3372f5bd6********
     *
     * @var string
     */
    public $accessToken;

    /**
     * @var CredentialConfig
     */
    public $credentialConfig;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example a730ae0d7c6a487d87c661d199********
     *
     * @var string
     */
    public $refreshToken;
    protected $_name = [
        'accessToken'      => 'AccessToken',
        'credentialConfig' => 'CredentialConfig',
        'projectName'      => 'ProjectName',
        'refreshToken'     => 'RefreshToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->credentialConfig) {
            $res['CredentialConfig'] = null !== $this->credentialConfig ? $this->credentialConfig->toMap() : null;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->refreshToken) {
            $res['RefreshToken'] = $this->refreshToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshWebofficeTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfig = CredentialConfig::fromMap($map['CredentialConfig']);
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RefreshToken'])) {
            $model->refreshToken = $map['RefreshToken'];
        }

        return $model;
    }
}
