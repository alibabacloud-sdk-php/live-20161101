<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRealTimeBpsDataResponse\realTimeBpsDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainRealTimeBpsDataResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $dataInterval;

    /**
     * @var realTimeBpsDataPerInterval
     */
    public $realTimeBpsDataPerInterval;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'domainName'                 => 'DomainName',
        'startTime'                  => 'StartTime',
        'endTime'                    => 'EndTime',
        'dataInterval'               => 'DataInterval',
        'realTimeBpsDataPerInterval' => 'RealTimeBpsDataPerInterval',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('startTime', $this->startTime, true);
        Model::validateRequired('endTime', $this->endTime, true);
        Model::validateRequired('dataInterval', $this->dataInterval, true);
        Model::validateRequired('realTimeBpsDataPerInterval', $this->realTimeBpsDataPerInterval, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->realTimeBpsDataPerInterval) {
            $res['RealTimeBpsDataPerInterval'] = null !== $this->realTimeBpsDataPerInterval ? $this->realTimeBpsDataPerInterval->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainRealTimeBpsDataResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['RealTimeBpsDataPerInterval'])) {
            $model->realTimeBpsDataPerInterval = realTimeBpsDataPerInterval::fromMap($map['RealTimeBpsDataPerInterval']);
        }

        return $model;
    }
}
