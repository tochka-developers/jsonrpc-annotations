<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"PROPERTY"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
#[NamedArgumentConstructor]
class TimeZone implements ApiAnnotationInterface
{
    public string $timezone;

    public function __construct(string $timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @param array{timezone: string} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['timezone']);
    }
}
