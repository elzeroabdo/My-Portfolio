<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class ProjectsChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    public ?string $filter = 'today';
    protected function getFilters(): ?array
{
    return [
        'today' => 'Today',
        'week' => 'Last week',
        'month' => 'Last month',
        'year' => 'This year',
    ];
}
    protected function getData(): array
    {
        $activeFilter = $this->filter;
        $data=Trend::model(Project::class)
                ->between(
                    start: now()->startOfYear(),
                    end: now()->endOfYear(),
                )
                ->perMonth()
                ->count();
        return [
            'data sets' => [
                [
                    'label' => 'Projects',
                    'data' => $data ->map(fn (TrendValue $value) => $value->aggregate),
                    'color' => 'blue',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),


        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
