<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeHttpCodeDataResponse\realTimeHttpCodeData\usageData;
use AlibabaCloud\Tea\Model;

class realTimeHttpCodeData extends Model
{
    /**
     * @var usageData[]
     */
    public $usageData;
    protected $_name = [
        'usageData' => 'UsageData',
    ];

    public function validate()
    {
        Model::validateRequired('usageData', $this->usageData, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->usageData) {
            $res['UsageData'] = [];
            if (null !== $this->usageData && \is_array($this->usageData)) {
                $n = 0;
                foreach ($this->usageData as $item) {
                    $res['UsageData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return realTimeHttpCodeData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UsageData'])) {
            if (!empty($map['UsageData'])) {
                $model->usageData = [];
                $n                = 0;
                foreach ($map['UsageData'] as $item) {
                    $model->usageData[$n++] = null !== $item ? usageData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}