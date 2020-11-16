<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainMappingResponse\liveDomainModels;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainMappingResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var liveDomainModels
     */
    public $liveDomainModels;
    protected $_name = [
        'requestId'        => 'RequestId',
        'liveDomainModels' => 'LiveDomainModels',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('liveDomainModels', $this->liveDomainModels, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->liveDomainModels) {
            $res['LiveDomainModels'] = null !== $this->liveDomainModels ? $this->liveDomainModels->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainMappingResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LiveDomainModels'])) {
            $model->liveDomainModels = liveDomainModels::fromMap($map['LiveDomainModels']);
        }

        return $model;
    }
}
