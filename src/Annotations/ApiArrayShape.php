<?php

namespace Tochka\JsonRpc\Annotations;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD", "PROPERTY"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
class ApiArrayShape
{
    public array $shape;
}
