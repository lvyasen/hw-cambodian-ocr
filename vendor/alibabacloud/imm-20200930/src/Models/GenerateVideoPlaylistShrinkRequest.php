<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class GenerateVideoPlaylistShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $credentialConfigShrink;

    /**
     * @example oss://bucket/object/master.m3u8
     *
     * @var string
     */
    public $masterURI;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var string
     */
    public $overwritePolicy;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 0
     *
     * @var float
     */
    public $sourceDuration;

    /**
     * @example 0
     *
     * @var float
     */
    public $sourceStartTime;

    /**
     * @var string
     */
    public $sourceSubtitlesShrink;

    /**
     * @example oss://imm-test/testcases/video.mp4
     *
     * @var string
     */
    public $sourceURI;

    /**
     * @example {"key1": "value1", "key2": "value2"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $targetsShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'credentialConfigShrink' => 'CredentialConfig',
        'masterURI'              => 'MasterURI',
        'notificationShrink'     => 'Notification',
        'overwritePolicy'        => 'OverwritePolicy',
        'projectName'            => 'ProjectName',
        'sourceDuration'         => 'SourceDuration',
        'sourceStartTime'        => 'SourceStartTime',
        'sourceSubtitlesShrink'  => 'SourceSubtitles',
        'sourceURI'              => 'SourceURI',
        'tagsShrink'             => 'Tags',
        'targetsShrink'          => 'Targets',
        'userData'               => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->credentialConfigShrink) {
            $res['CredentialConfig'] = $this->credentialConfigShrink;
        }
        if (null !== $this->masterURI) {
            $res['MasterURI'] = $this->masterURI;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->overwritePolicy) {
            $res['OverwritePolicy'] = $this->overwritePolicy;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->sourceDuration) {
            $res['SourceDuration'] = $this->sourceDuration;
        }
        if (null !== $this->sourceStartTime) {
            $res['SourceStartTime'] = $this->sourceStartTime;
        }
        if (null !== $this->sourceSubtitlesShrink) {
            $res['SourceSubtitles'] = $this->sourceSubtitlesShrink;
        }
        if (null !== $this->sourceURI) {
            $res['SourceURI'] = $this->sourceURI;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->targetsShrink) {
            $res['Targets'] = $this->targetsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateVideoPlaylistShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CredentialConfig'])) {
            $model->credentialConfigShrink = $map['CredentialConfig'];
        }
        if (isset($map['MasterURI'])) {
            $model->masterURI = $map['MasterURI'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['OverwritePolicy'])) {
            $model->overwritePolicy = $map['OverwritePolicy'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['SourceDuration'])) {
            $model->sourceDuration = $map['SourceDuration'];
        }
        if (isset($map['SourceStartTime'])) {
            $model->sourceStartTime = $map['SourceStartTime'];
        }
        if (isset($map['SourceSubtitles'])) {
            $model->sourceSubtitlesShrink = $map['SourceSubtitles'];
        }
        if (isset($map['SourceURI'])) {
            $model->sourceURI = $map['SourceURI'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['Targets'])) {
            $model->targetsShrink = $map['Targets'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
