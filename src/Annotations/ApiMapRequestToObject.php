<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"METHOD"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
#[NamedArgumentConstructor]
class ApiMapRequestToObject implements ApiAnnotationInterface
{
    public string $parameterName;

    public function __construct(string $parameterName)
    {
        $this->parameterName = $parameterName;
    }

    /**
     * @param array{parameterName: string} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['parameterName']);
    }
}
