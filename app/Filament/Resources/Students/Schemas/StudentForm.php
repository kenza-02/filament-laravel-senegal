<?php

namespace App\Filament\Resources\Students\Schemas;

use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('prenom')->label('Saisissez le prenom ')->maxLength(50)
                    ->required(),
                TextInput::make('nom')->label('Saisissez le nom ')->maxLength(50)
                    ->required(),
                TextInput::make('email')
                    ->label('Saisissez l\'adresse email ')->unique(ignoreRecord:true)
                    ->email()
                    ->required(),
                DatePicker::make('date_naissance')->label('Saisissez la date de naissace ')->maxDate(Carbon::create(2010,12,31))
                    ->required(),
            ]);
    }
}
