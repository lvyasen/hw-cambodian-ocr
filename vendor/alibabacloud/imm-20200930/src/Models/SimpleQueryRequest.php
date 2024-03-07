<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\SDK\Imm\V20200930\Models\SimpleQueryRequest\aggregations;
use AlibabaCloud\Tea\Model;

class SimpleQueryRequest extends Model
{
    /**
     * @var aggregations[]
     */
    public $aggregations;

    /**
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpwZw==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example asc,desc
     *
     * @var string
     */
    public $order;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var SimpleQuery
     */
    public $query;

    /**
     * @example Size,Filename
     *
     * @var string
     */
    public $sort;

    /**
     * @var string[]
     */
    public $withFields;

    /**
     * @var bool
     */
    public $withoutTotalHits;
    protected $_name = [
        'aggregations'     => 'Aggregations',
        'datasetName'      => 'DatasetName',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'order'            => 'Order',
        'projectName'      => 'ProjectName',
        'query'            => 'Query',
        'sort'             => 'Sort',
        'withFields'       => 'WithFields',
        'withoutTotalHits' => 'WithoutTotalHits',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregations) {
            $res['Aggregations'] = [];
            if (null !== $this->aggregations && \is_array($this->aggregations)) {
                $n = 0;
                foreach ($this->aggregations as $item) {
                    $res['Aggregations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->query) {
            $res['Query'] = null !== $this->query ? $this->query->toMap() : null;
        }
        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }
        if (null !== $this->withFields) {
            $res['WithFields'] = $this->withFields;
        }
        if (null !== $this->withoutTotalHits) {
            $res['WithoutTotalHits'] = $this->withoutTotalHits;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimpleQueryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Aggregations'])) {
            if (!empty($map['Aggregations'])) {
                $model->aggregations = [];
                $n                   = 0;
                foreach ($map['Aggregations'] as $item) {
                    $model->aggregations[$n++] = null !== $item ? aggregations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['Query'])) {
            $model->query = SimpleQuery::fromMap($map['Query']);
        }
        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }
        if (isset($map['WithFields'])) {
            if (!empty($map['WithFields'])) {
                $model->withFields = $map['WithFields'];
            }
        }
        if (isset($map['WithoutTotalHits'])) {
            $model->withoutTotalHits = $map['WithoutTotalHits'];
        }

        return $model;
    }
}
