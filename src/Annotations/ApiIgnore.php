<?php

namespace Tochka\JsonRpc\Annotations;

/**
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
class ApiIgnore
{
    //
}
