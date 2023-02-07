<?php

namespace Tochka\JsonRpc\Contracts;

/**
 * @psalm-api
 */
interface ApiAnnotationParameterInterface extends ApiAnnotationInterface
{
    public function getParameterName(): string;
}
