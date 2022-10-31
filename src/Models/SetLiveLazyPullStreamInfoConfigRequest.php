<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class SetLiveLazyPullStreamInfoConfigRequest extends Model
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
     * @var string
     */
    public $pullAppName;

    /**
     * @var string
     */
    public $pullDomainName;

    /**
     * @var string
     */
    public $pullProtocol;
    protected $_name = [
        'appName'        => 'AppName',
        'domainName'     => 'DomainName',
        'ownerId'        => 'OwnerId',
        'pullAppName'    => 'PullAppName',
        'pullDomainName' => 'PullDomainName',
        'pullProtocol'   => 'PullProtocol',
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
        if (null !== $this->pullAppName) {
            $res['PullAppName'] = $this->pullAppName;
        }
        if (null !== $this->pullDomainName) {
            $res['PullDomainName'] = $this->pullDomainName;
        }
        if (null !== $this->pullProtocol) {
            $res['PullProtocol'] = $this->pullProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetLiveLazyPullStreamInfoConfigRequest
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
        if (isset($map['PullAppName'])) {
            $model->pullAppName = $map['PullAppName'];
        }
        if (isset($map['PullDomainName'])) {
            $model->pullDomainName = $map['PullDomainName'];
        }
        if (isset($map['PullProtocol'])) {
            $model->pullProtocol = $map['PullProtocol'];
        }

        return $model;
    }
}
