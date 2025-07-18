<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLivePrivateLineAvailGAResponseBody\livePrivateLineAvailGAs;
use AlibabaCloud\Tea\Model;

class DescribeLivePrivateLineAvailGAResponseBody extends Model
{
    /**
     * @description The GA instance configuration details.
     *
     * @var livePrivateLineAvailGAs
     */
    public $livePrivateLineAvailGAs;

    /**
     * @description The request ID.
     *
     * @example C4865B85-664B-19D3-BB16-C62FB83C8226
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'livePrivateLineAvailGAs' => 'LivePrivateLineAvailGAs',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->livePrivateLineAvailGAs) {
            $res['LivePrivateLineAvailGAs'] = null !== $this->livePrivateLineAvailGAs ? $this->livePrivateLineAvailGAs->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLivePrivateLineAvailGAResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LivePrivateLineAvailGAs'])) {
            $model->livePrivateLineAvailGAs = livePrivateLineAvailGAs::fromMap($map['LivePrivateLineAvailGAs']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
