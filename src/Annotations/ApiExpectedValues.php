<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"PROPERTY"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
#[NamedArgumentConstructor]
class ApiExpectedValues implements ApiAnnotationInterface
{
    public array $values = [];

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    /**
     * @param array{values: array} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['values']);
    }
}
