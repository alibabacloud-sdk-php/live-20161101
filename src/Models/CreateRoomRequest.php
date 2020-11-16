<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateRoomRequest extends Model
{
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
    public $anchorId;

    /**
     * @var string
     */
    public $templateIds;

    /**
     * @var bool
     */
    public $useAppTranscode;
    protected $_name = [
        'appId'           => 'AppId',
        'roomId'          => 'RoomId',
        'anchorId'        => 'AnchorId',
        'templateIds'     => 'TemplateIds',
        'useAppTranscode' => 'UseAppTranscode',
    ];

    public function validate()
    {
        Model::validateRequired('appId', $this->appId, true);
        Model::validateRequired('roomId', $this->roomId, true);
        Model::validateRequired('anchorId', $this->anchorId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->roomId) {
            $res['RoomId'] = $this->roomId;
        }
        if (null !== $this->anchorId) {
            $res['AnchorId'] = $this->anchorId;
        }
        if (null !== $this->templateIds) {
            $res['TemplateIds'] = $this->templateIds;
        }
        if (null !== $this->useAppTranscode) {
            $res['UseAppTranscode'] = $this->useAppTranscode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRoomRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RoomId'])) {
            $model->roomId = $map['RoomId'];
        }
        if (isset($map['AnchorId'])) {
            $model->anchorId = $map['AnchorId'];
        }
        if (isset($map['TemplateIds'])) {
            $model->templateIds = $map['TemplateIds'];
        }
        if (isset($map['UseAppTranscode'])) {
            $model->useAppTranscode = $map['UseAppTranscode'];
        }

        return $model;
    }
}
