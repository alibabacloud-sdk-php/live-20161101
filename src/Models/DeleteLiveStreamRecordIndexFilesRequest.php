<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DeleteLiveStreamRecordIndexFilesRequest extends Model
{
    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string[]
     */
    public $recordId;

    /**
     * @var string
     */
    public $removeFile;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName'    => 'AppName',
        'domainName' => 'DomainName',
        'ownerId'    => 'OwnerId',
        'recordId'   => 'RecordId',
        'removeFile' => 'RemoveFile',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->removeFile) {
            $res['RemoveFile'] = $this->removeFile;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLiveStreamRecordIndexFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecordId'])) {
            if (!empty($map['RecordId'])) {
                $model->recordId = $map['RecordId'];
            }
        }
        if (isset($map['RemoveFile'])) {
            $model->removeFile = $map['RemoveFile'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
