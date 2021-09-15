<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
class ApiArrayShape implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    public array $shape;
    
    public function __construct(array $shape)
    {
        $this->shape = $shape;
    }
    
    public static function __set_state(array $array): self
    {
        return new self($array['shape']);
    }
}
