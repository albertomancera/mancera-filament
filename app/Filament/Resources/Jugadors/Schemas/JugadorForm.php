<?php

namespace App\Filament\Resources\Jugadors\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class JugadorForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('equipo_id')
                    ->relationship('equipo', 'id')
                    ->required(),
                TextInput::make('nombre')
                    ->required(),
                TextInput::make('posicion')
                    ->required(),
                TextInput::make('valor_mercado')
                    ->required()
                    ->numeric(),
            ]);
    }
}
