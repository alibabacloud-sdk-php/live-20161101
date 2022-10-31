<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeStreamNumResponseBody extends Model
{
    /**
     * @var int
     */
    public $lazyTranscodedNumber;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $transcodedNumber;

    /**
     * @var int
     */
    public $untranscodeNumber;
    protected $_name = [
        'lazyTranscodedNumber' => 'LazyTranscodedNumber',
        'requestId'            => 'RequestId',
        'total'                => 'Total',
        'transcodedNumber'     => 'TranscodedNumber',
        'untranscodeNumber'    => 'UntranscodeNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lazyTranscodedNumber) {
            $res['LazyTranscodedNumber'] = $this->lazyTranscodedNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->transcodedNumber) {
            $res['TranscodedNumber'] = $this->transcodedNumber;
        }
        if (null !== $this->untranscodeNumber) {
            $res['UntranscodeNumber'] = $this->untranscodeNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamTranscodeStreamNumResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LazyTranscodedNumber'])) {
            $model->lazyTranscodedNumber = $map['LazyTranscodedNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['TranscodedNumber'])) {
            $model->transcodedNumber = $map['TranscodedNumber'];
        }
        if (isset($map['UntranscodeNumber'])) {
            $model->untranscodeNumber = $map['UntranscodeNumber'];
        }

        return $model;
    }
}
