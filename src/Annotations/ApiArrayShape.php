<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
class ApiArrayShape implements ApiAnnotationInterface
{
    public array $shape;

    public function __construct(array $shape)
    {
        $this->shape = $shape;
    }

    /**
     * @param array{shape: array} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['shape']);
    }
}
