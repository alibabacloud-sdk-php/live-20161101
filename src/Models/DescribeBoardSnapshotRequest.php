<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeBoardSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $boardId;
    protected $_name = [
        'appId'   => 'AppId',
        'boardId' => 'BoardId',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('boardId', $this->boardId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBoardSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }

        return $model;
    }
}
