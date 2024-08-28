<?php

namespace App\Services\ContentTransformations;

class CustomListItemsTransformation implements ContentTransformationStrategy
{
    public function transform(array $content): array
    {
        return $content['data']['custom_list_items'];
    }
}
