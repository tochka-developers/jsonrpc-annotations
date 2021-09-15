<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"PROPERTY", "METHOD"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD)]
class ApiValueExample implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    public array $examples;
    
    public function __construct(array $examples)
    {
        $this->examples = $examples;
    }
    
    public static function __set_state(array $array): self
    {
        return new self($array['examples']);
    }
}
