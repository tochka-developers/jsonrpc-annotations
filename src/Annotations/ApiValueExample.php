<?php

namespace Tochka\JsonRpc\Annotations;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::IS_REPEATABLE)]
class ApiValueExample
{
    public array $examples;
}
