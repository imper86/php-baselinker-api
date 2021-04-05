<?php


namespace Imper86\PhpBaselinkerApi\Model\Orders\GetOrders;


/**
 * Class OrderPayment
 * @package Imper86\PhpBaselinkerApi\Model\Orders\GetOrders
 */
class OrderPayment
{
    /**
     * @var string
     */
    private string $method;
    /**
     * @var bool
     */
    private bool $methodCod;
    /**
     * @var float
     */
    private float $done;

    /**
     * OrderPayment constructor.
     * @param string $method
     * @param bool $methodCod
     * @param float $done
     */
    public function __construct(string $method, bool $methodCod, float $done)
    {
        $this->method = $method;
        $this->methodCod = $methodCod;
        $this->done = $done;
    }

    /**
     * @param mixed[] $data
     * @return self
     */
    public static function fromPrimitives(array $data): self
    {
        return new self(
            $data['payment_method'],
            $data['payment_method_cod'],
            $data['payment_done'],
        );
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return bool
     */
    public function isMethodCod(): bool
    {
        return $this->methodCod;
    }

    /**
     * @return float
     */
    public function getDone(): float
    {
        return $this->done;
    }
}
