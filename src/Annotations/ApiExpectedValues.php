<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class ApiExpectedValues implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    public array $values = [];
    
    public function __construct(array $values)
    {
        $this->values = $values;
    }
    
    public static function __set_state(array $array): self
    {
        return new self($array['values']);
    }
}
