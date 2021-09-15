<?php

namespace Tochka\JsonRpc\Contracts;

interface ApiAnnotationContract
{
    public static function __set_state(array $array): self;
}
