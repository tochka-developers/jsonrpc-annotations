<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"PROPERTY", "METHOD"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD)]
class ApiValueExample implements ApiAnnotationInterface
{
    public array $examples;

    public function __construct(array $examples)
    {
        $this->examples = $examples;
    }

    /**
     * @param array{examples: array} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['examples']);
    }
}
