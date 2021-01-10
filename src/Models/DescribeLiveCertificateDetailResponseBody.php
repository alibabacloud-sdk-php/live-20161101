<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveCertificateDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $certId;

    /**
     * @var string
     */
    public $certName;

    /**
     * @var string
     */
    public $cert;
    protected $_name = [
        'requestId' => 'RequestId',
        'certId'    => 'CertId',
        'certName'  => 'CertName',
        'cert'      => 'Cert',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certId) {
            $res['CertId'] = $this->certId;
        }
        if (null !== $this->certName) {
            $res['CertName'] = $this->certName;
        }
        if (null !== $this->cert) {
            $res['Cert'] = $this->cert;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveCertificateDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertId'])) {
            $model->certId = $map['CertId'];
        }
        if (isset($map['CertName'])) {
            $model->certName = $map['CertName'];
        }
        if (isset($map['Cert'])) {
            $model->cert = $map['Cert'];
        }

        return $model;
    }
}
