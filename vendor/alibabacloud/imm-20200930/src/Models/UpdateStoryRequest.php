<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\UpdateStoryRequest\cover;
use AlibabaCloud\Tea\Model;

class UpdateStoryRequest extends Model
{
    /**
     * @var cover
     */
    public $cover;

    /**
     * @example test
     *
     * @var string
     */
    public $customId;

    /**
     * @example {"key": "value"}
     *
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @example testdata
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example testid
     *
     * @var string
     */
    public $objectId;

    /**
     * @example immtest
     *
     * @var string
     */
    public $projectName;

    /**
     * @example newstory
     *
     * @var string
     */
    public $storyName;
    protected $_name = [
        'cover'        => 'Cover',
        'customId'     => 'CustomId',
        'customLabels' => 'CustomLabels',
        'datasetName'  => 'DatasetName',
        'objectId'     => 'ObjectId',
        'projectName'  => 'ProjectName',
        'storyName'    => 'StoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cover) {
            $res['Cover'] = null !== $this->cover ? $this->cover->toMap() : null;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cover'])) {
            $model->cover = cover::fromMap($map['Cover']);
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }

        return $model;
    }
}
