<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class JoinBoardRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appUid;

    /**
     * @var string
     */
    public $boardId;
    protected $_name = [
        'ownerId' => 'OwnerId',
        'appId'   => 'AppId',
        'appUid'  => 'AppUid',
        'boardId' => 'BoardId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinBoardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }

        return $model;
    }
}
