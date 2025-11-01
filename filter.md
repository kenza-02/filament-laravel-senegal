# 1. Filtre par Nom et Prénom (Filtre Personnalisé)

            Filter::make('nom_prenom')
                ->form([
                    TextInput::make('full_name')
                        ->label('Recherche Nom/Prénom')
                        ->placeholder('Entrez un nom ou un prénom')
                ])
                // La logique de la requête pour rechercher dans les deux colonnes
                ->query(function (Builder $query, array $data): Builder {
                    if (isset($data['full_name'])) {
                        $searchTerm = '%' . $data['full_name'] . '%';
                        return $query->where(function (Builder $q) use ($searchTerm) {
                            $q->where('prenom', 'like', $searchTerm)
                              ->orWhere('nom', 'like', $searchTerm);
                        });
                    }
                    return $query;
                }),

            // 2. Filtre par Année de Naissance (Filtre de Sélection)
            SelectFilter::make('date_naissance')
                ->label('Année de Naissance')
                // Génère les options basées sur l'année de la colonne 'date_naissance'
                ->options(function () {
                    // C'est une façon de populer le filtre avec les années existantes dans la DB
                    return \App\Models\Student::selectRaw('YEAR(date_naissance) as annee')
                        ->distinct()
                        ->pluck('annee', 'annee') // Affiche l'année comme clé et valeur
                        ->toArray();
                })
                // La logique de la requête
                ->query(fn (Builder $query, array $data): Builder => $query->whereYear('date_naissance', $data['value'])),

# 2. Ajouter sexe

// Le champ de sélection pour 'sexe'
Select::make('sexe')
->options([
'M' => 'Masculin',
'F' => 'Féminin',
])
->required()
->label('Sexe') // Étiquette affichée

# 3. Affichage du sexe dans la table

            TextColumn::make('sexe')
                ->badge() // Ajoute un style de badge
                ->formatStateUsing(fn (string $state): string => match ($state) {
                    'M' => 'Masculin',
                    'F' => 'Féminin',
                    default => 'Non spécifié',
                })
                ->color(fn (string $state): string => match ($state) {
                    'M' => 'info',
                    'F' => 'danger',
                    default => 'gray',
                })
                ->sortable(),

# 4. Table ajout sexe :$table->string('sexe', 1);
