<?php

namespace App\Class;

use Spatie\LaravelSettings\Settings;


class GeneralSettings extends Settings
{
    public string $site_name;

    public float $the_tax;

    public float $delivery_price;
    
    public bool $site_active;
    
    public static function group(): string
    {
        return 'general';
    }
}