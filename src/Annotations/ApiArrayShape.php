<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
class ApiArrayShape implements NamedArgumentConstructorAttribute
{
    public array $shape;
    
    public function __construct(array $shape)
    {
        $this->shape = $shape;
    }
}
