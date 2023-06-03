<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;

class UsersChart extends BarChartWidget
{
    protected static ?string $heading = 'Users';

    protected function getData(): array
    {
        return [
            //
        ];
    }
}
