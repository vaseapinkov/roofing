<?php

namespace App\DTO;

class NavItem
{
    public string $name;
    public string $link;

    public function __construct(string $name, string $link)
    {
        $this->name = $name;
        $this->link = $link;
    }
}
