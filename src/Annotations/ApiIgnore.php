<?php

namespace Tochka\JsonRpc\Annotations;

use Spiral\Attributes\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 * @NamedArgumentConstructor
 * @psalm-suppress DeprecatedClass
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
#[NamedArgumentConstructor]
class ApiIgnore implements ApiAnnotationInterface {}
