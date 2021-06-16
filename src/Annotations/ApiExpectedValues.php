<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class ApiExpectedValues implements NamedArgumentConstructorAttribute
{
    public array $values = [];
    
    public function __construct(array $values)
    {
        $this->values = $values;
    }
}
