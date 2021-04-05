<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetSeries;

/**
 * Class Series
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetSeries
 */
class Series
{
    /**
     * @var int
     */
    private int $id;
    /**
     * @var string
     */
    private string $type;
    /**
     * @var string
     */
    private string $name;
    /**
     * @var string
     */
    private string $format;

    /**
     * Series constructor.
     * @param int $id
     * @param string $type
     * @param string $name
     * @param string $format
     */
    public function __construct(int $id, string $type, string $name, string $format)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
        $this->format = $format;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self($data['id'], $data['type'], $data['name'], $data['format']);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFormat(): string
    {
        return $this->format;
    }
}
