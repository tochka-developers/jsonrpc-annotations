<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class ApiIgnore implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    public static function __set_state(array $array): self
    {
        return new self();
    }
}
