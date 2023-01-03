<?php

namespace App\Filament\Resources\UserResource\Widgets;

use Filament\Forms\Components\Card;
use Filament\Widgets\Widget;



class StatsOverview extends Widget
{
    protected static string $view = 'filament.resources.user-resource.widgets.stats-overview';

    protected function getCards(): array
    {
        return [
            Card::make('Nombre d utilisateur par Ville', '192.1k')
            ->description('32 increase')
            ->descriptionIcon('heroicon-s-trending-up'),
             Card::make('Nombre de Candidature par Ville', '21%')
            ->description('7% increase')
            ->descriptionIcon('heroicon-s-trending-down'),
            Card::make('Nombre de client par ville', '3:12')
            ->description('3% increase')
            ->descriptionIcon('heroicon-s-trending-up')
            ->color('success'),
        ];
    }

}
