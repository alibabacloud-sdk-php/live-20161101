<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SendRoomUserNotificationRequest extends Model
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
    public $roomId;

    /**
     * @var string
     */
    public $appUid;

    /**
     * @var string
     */
    public $toAppUid;

    /**
     * @var string
     */
    public $data;

    /**
     * @var int
     */
    public $priority;
    protected $_name = [
        'ownerId'  => 'OwnerId',
        'appId'    => 'AppId',
        'roomId'   => 'RoomId',
        'appUid'   => 'AppUid',
        'toAppUid' => 'ToAppUid',
        'data'     => 'Data',
        'priority' => 'Priority',
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
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->appUid) {
            $res['AppUid'] = $this->appUid;
        }
        if (null !== $this->toAppUid) {
            $res['ToAppUid'] = $this->toAppUid;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendRoomUserNotificationRequest
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
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['AppUid'])) {
            $model->appUid = $map['AppUid'];
        }
        if (isset($map['ToAppUid'])) {
            $model->toAppUid = $map['ToAppUid'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
