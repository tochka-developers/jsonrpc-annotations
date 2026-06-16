<?php

namespace Tochka\JsonRpc\Annotations;

use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
use Tochka\JsonRpc\Contracts\ApiAnnotationInterface;

/**
 * @psalm-api
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 * @NamedArgumentConstructor
 */
#[\Attribute(\Attribute::TARGET_CLASS | \Attribute::TARGET_METHOD)]
#[NamedArgumentConstructor]
class ApiIgnore implements ApiAnnotationInterface {}
