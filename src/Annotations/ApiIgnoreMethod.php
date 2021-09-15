<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class ApiIgnoreMethod implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    public string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public static function __set_state(array $array): self
    {
        return new self($array['name']);
    }
    
}
