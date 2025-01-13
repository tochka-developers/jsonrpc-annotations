<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY | \Attribute::IS_REPEATABLE)]
#[NamedArgumentConstructor]
class ValidationRule implements ApiAnnotationInterface
{
    public string $rule;
    public ?string $field;

    public function __construct(string $rule, ?string $field = null)
    {
        $this->rule = $rule;
        $this->field = $field;
    }

    /**
     * @param array{rule: string, field?: string|null} $array
     * @return self
     */
    public static function __set_state(array $array): self
    {
        return new self($array['rule'], $array['field'] ?? null);
    }
}
