<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Education;
use App\Models\Project;
use App\Models\Skill;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverView extends BaseWidget
{
    protected static ?string $pollingInterval = '10s';


    protected static bool $islazy = true;
    protected function getStats(): array
    {
        return [
            Stat::make('Projects', Project::count())
                ->description('Total Projects')
                ->descriptionIcon('heroicon-o-wallet')
                ->descriptionColor('success')
                ->chart([20, 40, 30, 50, 40, 8 , 10, 15, 20, 30, 40, 50, 60, 70, 80, 90, 100]),
            Stat::make('Contacts', Contact::count()),
            Stat::make('educations', Education::count()),
            Stat::make('Skills', Skill::count()),
        ];

    }
}
