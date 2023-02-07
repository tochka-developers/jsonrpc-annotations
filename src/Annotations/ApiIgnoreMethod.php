<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"CLASS"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class ApiIgnoreMethod implements ApiAnnotationInterface
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param array{name: string} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['name']);
    }
}
