<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\ModifyCasterProgramRequest\episode;
use AlibabaCloud\Tea\Model;

class ModifyCasterProgramRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var episode[]
     */
    public $episode;
    protected $_name = [
        'ownerId'  => 'OwnerId',
        'casterId' => 'CasterId',
        'episode'  => 'Episode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->episode) {
            $res['Episode'] = [];
            if (null !== $this->episode && \is_array($this->episode)) {
                $n = 0;
                foreach ($this->episode as $item) {
                    $res['Episode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCasterProgramRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['Episode'])) {
            if (!empty($map['Episode'])) {
                $model->episode = [];
                $n              = 0;
                foreach ($map['Episode'] as $item) {
                    $model->episode[$n++] = null !== $item ? episode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
