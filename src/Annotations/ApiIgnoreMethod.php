<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class ApiIgnoreMethod implements NamedArgumentConstructorAttribute
{
    public string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
