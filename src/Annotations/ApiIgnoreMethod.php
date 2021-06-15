<?php

namespace Tochka\JsonRpc\Annotations;

/**
 * @Annotation
 * @Target({"CLASS"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class ApiIgnoreMethod
{
    public string $name;
}
