<?php

namespace Tochka\JsonRpc\Annotations;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_PROPERTY)]
class ApiExpectedValues
{
    public array $values = [];
}
