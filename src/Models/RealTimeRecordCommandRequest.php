<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class RealTimeRecordCommandRequest extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $streamName;
    protected $_name = [
        'command'    => 'Command',
        'domainName' => 'DomainName',
        'appName'    => 'AppName',
        'streamName' => 'StreamName',
    ];

    public function validate()
    {
        Model::validateRequired('command', $this->command, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('appName', $this->appName, true);
        Model::validateRequired('streamName', $this->streamName, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RealTimeRecordCommandRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
