<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"METHOD"})
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
class ApiMapRequestToObject implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    public string $parameterName;
    
    public function __construct(string $parameterName)
    {
        $this->parameterName = $parameterName;
    }
    
    public static function __set_state(array $array): self
    {
        return new self($array['parameterName']);
    }
}
