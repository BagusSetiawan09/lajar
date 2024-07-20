<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class WidgetAllReportChart extends ChartWidget
{
    protected static ?string $heading = 'All Report';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Semua Laporan',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'fill' => 'start',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
