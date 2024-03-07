<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateFileCompressionTaskRequest;

use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @example /new-dir/
     *
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $mode;

    /**
     * @example oss://test-bucket/test-object
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'alias' => 'Alias',
        'mode'  => 'Mode',
        'URI'   => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
