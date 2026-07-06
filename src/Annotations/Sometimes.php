<?php

namespace Tochka\JsonRpc\Annotations;

use Doctrine\Common\Annotations\Annotation\NamedArgumentConstructor;
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
class Sometimes implements ApiAnnotationInterface {}
