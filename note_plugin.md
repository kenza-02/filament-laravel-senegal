# Pour les plugins d'analyse

filament/spatie-settings-plugin

# Widget et statistiques

StatsOverviewWidget

# Translation : composer require filament/translations

# exemple:php artisan make:filament-widget UsersOverview

// app/Filament/Widgets/UsersOverview.php

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\User;
use App\Models\Order;

class UsersOverview extends BaseWidget
{
protected function getCards(): array
{
return [
// 1. Nombre total d'utilisateurs
Card::make('Total Utilisateurs', User::count())
->description('32k augmentations depuis le mois dernier')
->descriptionIcon('heroicon-s-trending-up') // Ajoute une icône
->color('success'), // Couleur de la carte

            // 2. Nombre de nouvelles commandes
            Card::make('Commandes Récentes', Order::whereDate('created_at', today())->count())
                ->description('Commandes passées aujourd\'hui')
                ->color('warning'),

            // 3. Métrique personnalisée
            Card::make('Revenus', '$192.1k')
                ->description('Nouveaux gains depuis 3 mois')
                ->color('danger'),
        ];
    }

}

# Widget graph

ChartWidget
