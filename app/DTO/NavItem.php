<?php

namespace App\DTO;

class NavItem
{
    public function __construct(
        public string $name,
        public string $link
    )
    {}
}
