# 1 : php artisan make:filament-widget StatsOverview --resource=StudentResource

# 2 : Modifier le widget (StatsOverview.php)

protected function getStats(): array
{
// Récupère le nombre total d'étudiants
$totalStudents = Student::count();

        // Calcule le nombre d'hommes (Masculin)
        $maleStudents = Student::where('sexe', 'M')->count();

        return [
            Stat::make('Total Étudiants', $totalStudents)
                ->description('Nombre total d\'enregistrements'),

            Stat::make('Étudiants Masculins', $maleStudents)
                ->description("$maleStudents inscrits")
                ->color('info'), // Couleur d'information (bleu)

            Stat::make('Étudiants Féminins', $totalStudents - $maleStudents)
                ->description('Reste des étudiants')
                ->color('success'), // Couleur verte
        ];
    }

# 3 : Attacher le Widget à la Ressource dans StudentResource

public static function getWidgets(): array
{
return [
// Ajout du widget que nous venons de créer
StatsOverview::class,
];
}
