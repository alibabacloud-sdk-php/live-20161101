<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamTranscodeStreamNumResponse extends Model
{
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

    /**
     * @var int
     */
    public $lazyTranscodedNumber;
    protected $_name = [
        'requestId'            => 'RequestId',
        'total'                => 'Total',
        'transcodedNumber'     => 'TranscodedNumber',
        'untranscodeNumber'    => 'UntranscodeNumber',
        'lazyTranscodedNumber' => 'LazyTranscodedNumber',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('transcodedNumber', $this->transcodedNumber, true);
        Model::validateRequired('untranscodeNumber', $this->untranscodeNumber, true);
        Model::validateRequired('lazyTranscodedNumber', $this->lazyTranscodedNumber, true);
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->lazyTranscodedNumber) {
            $res['LazyTranscodedNumber'] = $this->lazyTranscodedNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamTranscodeStreamNumResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['LazyTranscodedNumber'])) {
            $model->lazyTranscodedNumber = $map['LazyTranscodedNumber'];
        }

        return $model;
    }
}
