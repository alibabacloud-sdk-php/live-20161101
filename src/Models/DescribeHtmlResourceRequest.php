<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHtmlResourceRequest extends Model
{
    /**
     * @var string
     */
    public $htmlResourceId;

    /**
     * @var string
     */
    public $htmlUrl;

    /**
     * @var string
     */
    public $casterId;
    protected $_name = [
        'htmlResourceId' => 'HtmlResourceId',
        'htmlUrl'        => 'htmlUrl',
        'casterId'       => 'CasterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->htmlResourceId) {
            $res['HtmlResourceId'] = $this->htmlResourceId;
        }
        if (null !== $this->htmlUrl) {
            $res['htmlUrl'] = $this->htmlUrl;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHtmlResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HtmlResourceId'])) {
            $model->htmlResourceId = $map['HtmlResourceId'];
        }
        if (isset($map['htmlUrl'])) {
            $model->htmlUrl = $map['htmlUrl'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        return $model;
    }
}
