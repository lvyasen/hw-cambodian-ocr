<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class Boundary extends Model
{
    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $left;

    /**
     * @var PointInt64[]
     */
    public $polygon;

    /**
     * @var int
     */
    public $top;

    /**
     * @var int
     */
    public $width;
    protected $_name = [
        'height'  => 'Height',
        'left'    => 'Left',
        'polygon' => 'Polygon',
        'top'     => 'Top',
        'width'   => 'Width',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->left) {
            $res['Left'] = $this->left;
        }
        if (null !== $this->polygon) {
            $res['Polygon'] = [];
            if (null !== $this->polygon && \is_array($this->polygon)) {
                $n = 0;
                foreach ($this->polygon as $item) {
                    $res['Polygon'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->top) {
            $res['Top'] = $this->top;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Boundary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['Left'])) {
            $model->left = $map['Left'];
        }
        if (isset($map['Polygon'])) {
            if (!empty($map['Polygon'])) {
                $model->polygon = [];
                $n              = 0;
                foreach ($map['Polygon'] as $item) {
                    $model->polygon[$n++] = null !== $item ? PointInt64::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Top'])) {
            $model->top = $map['Top'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
