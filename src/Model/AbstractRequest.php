<?php

namespace Imper86\PhpBaselinkerApi\Model;

use Imper86\PhpBaselinkerApi\Util\CaseConverter;

abstract class AbstractRequest implements RequestInterface
{
    public function toArray(): array
    {
        return iterator_to_array(
            (function () {
                $reflection = new \ReflectionClass($this);

                foreach ($reflection->getProperties() as $property) {
                    $value = $this->{$property->getName()};

                    if (null !== $value) {
                        yield CaseConverter::toSnake($property->getName()) => $value;
                    }
                }
            })(),
        );
    }
}
