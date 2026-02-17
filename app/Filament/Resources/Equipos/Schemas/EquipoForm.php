<?php

namespace App\Filament\Resources\Equipos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EquipoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('estadio')
                    ->required(),
                TextInput::make('color_primario')
                    ->default(null),
            ]);
    }
}
