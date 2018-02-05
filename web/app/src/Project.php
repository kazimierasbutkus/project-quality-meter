<?php

namespace NfqQualityMeter;

class Project implements \JsonSerializable
{
    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var array */
    private $qualityValues;
    /**  @var float */
    private $kpi;
    /** @var string */
    private $owner;
    /** @var string */
    private $type;
    /** @var string */
    private $status;

    public function __construct(
        string $id,
        string $name,
        string $owner,
        string $type,
        string $status,
        array $qualityValues = [],
        float $kpi = 0
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->qualityValues = $qualityValues;
        $this->kpi = $kpi;
        $this->owner = $owner;
        $this->type = $type;
        $this->status = $status;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'kpi' => $this->kpi,
            'owner' => $this->owner,
            'type' => $this->type,
            'quality_values' => $this->qualityValues
//            [
//                [
//                    'group_id' => 'group-foo-1',
//                    'quality_items' => [
//                        [
//                            'item_id' => 'item-foo-1',
//                            'approved' => [
//                                'approver_id' => 333,
//                                'approver_name' => 'Kazimieras Butkus',
//                                'approve_time' => (new \DateTime())->format('Y-m-d H:i:s'),
//                            ],
//                        ],
//                        [
//                            'item_id' => 'item-foo-2',
//                            'approved' => [
//                                'approver_id' => 232333,
//                                'approver_name' => 'Someone Else',
//                                'approve_time' => (new \DateTime("yesterday"))->format('Y-m-d H:i:s'),
//                            ],
//                        ],
//                    ],
//                ],
//                [
//                    'group_id' => 'group-foo-2',
//                    'quality_items' => [
//                        [
//                            'item_id' => 'item-foo-2',
//                            'approved' => [
//                                'approver_id' => 333,
//                                'approver_name' => 'Kazimieras Butkus',
//                                'approve_time' => (new \DateTime("yesterday"))->format('Y-m-d H:i:s'),
//                            ],
//                        ],
//                    ],
//                ],
//            ],
        ];
    }
}
