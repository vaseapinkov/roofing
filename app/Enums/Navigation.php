<?php

namespace App\Enums;

use App\DTO\NavItem;
use Illuminate\Support\Collection;

enum Navigation: string
{
    case AboutUs = 'About Us';
    case Services = 'Services';
    case Reviews = 'Reviews';
    case ContactUs = 'Contact Us';

    public static function getRouteNames(self $item): string
    {
        return match ($item) {
            self::AboutUs => route('home') . "#about-us",
            self::Services => route('services.index'),
            self::Reviews => route('home') . "#reviews",
            self::ContactUs => route('contact-us'),
        };
    }

    public static function getNavigationArray(): Collection
    {
        return collect([
            new NavItem(self::AboutUs->value, self::getRouteNames(self::AboutUs)),
            new NavItem(self::Services->value, self::getRouteNames(self::Services)),
            new NavItem(self::Reviews->value, self::getRouteNames(self::Reviews)),
            new NavItem(self::ContactUs->value, self::getRouteNames(self::ContactUs)),
        ]);
    }
}
