<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::IS_REPEATABLE)]
class ApiValueExample implements NamedArgumentConstructorAttribute
{
    public array $examples;
    
    public function __construct(array $examples)
    {
        $this->examples = $examples;
    }
}
