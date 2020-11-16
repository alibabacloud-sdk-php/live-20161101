<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterLayoutsResponse\layouts\layout;

use AlibabaCloud\Tea\Model;

class blendList extends Model
{
    /**
     * @description LocationId
     *
     * @var string[]
     */
    public $locationId;
    protected $_name = [
        'locationId' => 'LocationId',
    ];

    public function validate()
    {
        Model::validateRequired('locationId', $this->locationId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blendList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationId'])) {
            if (!empty($map['LocationId'])) {
                $model->locationId = $map['LocationId'];
            }
        }

        return $model;
    }
}
