<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGeneralSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Restaurant');
        $this->migrator->add('general.the_tax', 75.23);
        $this->migrator->add('general.delivery_price', 33.25);
        $this->migrator->add('general.site_active', true);
    }
}