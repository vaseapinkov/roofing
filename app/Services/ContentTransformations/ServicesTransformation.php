<?php

namespace App\Services\ContentTransformations;

use App\Models\Service;

class ServicesTransformation implements ContentTransformationStrategy
{

    public function transform(array $content): array
    {
        return Service::all()->map(function (Service $element) {
            return [
                'title' => $element->name,
                'description' => $element->home_page_description,
                'image' => $element->home_page_image,
                'icon' => $element->icon,
                'link' => route('services.show', $element)
            ];
        })->toArray();
    }
}
