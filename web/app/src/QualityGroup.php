<?php

namespace NfqQualityMeter;

class QualityGroup implements \JsonSerializable
{
    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var int */
    private $importance;

    public function __construct(
        string $id,
        string $name,
        int $importance
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->importance = $importance;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'importance' => $this->importance,
        ];
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getImportance(): int
    {
        return $this->importance;
    }
}
