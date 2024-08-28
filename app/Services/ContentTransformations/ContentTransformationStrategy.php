<?php

namespace App\Services\ContentTransformations;

interface ContentTransformationStrategy
{
    public function transform(array $content): array;
}
