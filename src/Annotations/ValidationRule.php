<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructorAttribute;
use Tochka\JsonRpc\Contracts\ApiAnnotationContract;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY | \Attribute::IS_REPEATABLE)]
class ValidationRule implements ApiAnnotationContract, NamedArgumentConstructorAttribute
{
    /** @var mixed */
    public $rule;
    public ?string $field;
    
    public function __construct($rule, ?string $field = null)
    {
        $this->rule = $rule;
        $this->field = $field;
    }
    
    public static function __set_state(array $array): self
    {
        return new self($array['rule'], $array['field'] ?? null);
    }
}
