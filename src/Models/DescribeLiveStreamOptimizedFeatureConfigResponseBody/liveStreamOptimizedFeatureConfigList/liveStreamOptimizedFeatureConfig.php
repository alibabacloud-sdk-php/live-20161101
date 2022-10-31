<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamOptimizedFeatureConfigResponseBody\liveStreamOptimizedFeatureConfigList;

use AlibabaCloud\Tea\Model;

class liveStreamOptimizedFeatureConfig extends Model
{
    /**
     * @var string
     */
    public $configName;

    /**
     * @var string
     */
    public $configStatus;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'configName'   => 'ConfigName',
        'configStatus' => 'ConfigStatus',
        'configValue'  => 'ConfigValue',
        'domainName'   => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configName) {
            $res['ConfigName'] = $this->configName;
        }
        if (null !== $this->configStatus) {
            $res['ConfigStatus'] = $this->configStatus;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveStreamOptimizedFeatureConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigName'])) {
            $model->configName = $map['ConfigName'];
        }
        if (isset($map['ConfigStatus'])) {
            $model->configStatus = $map['ConfigStatus'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
