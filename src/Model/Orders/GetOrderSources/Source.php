<?php

namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrderSources;

/**
 * Class Source
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetOrderSources
 */
class Source
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
     * Sources constructor.
     * @param int $id
     * @param string $type
     * @param string $name
     */
    public function __construct(int $id, string $type, string $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
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

}
