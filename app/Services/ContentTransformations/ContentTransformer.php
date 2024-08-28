<?php

namespace App\Services\ContentTransformations;

class ContentTransformer
{
    public function __construct(protected ContentTransformationStrategy $strategy)
    {
    }

    public function transform(array $content): array
    {
        return $this->strategy->transform($content);
    }
}
