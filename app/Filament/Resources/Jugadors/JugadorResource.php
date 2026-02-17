<?php

namespace App\Filament\Resources\Jugadors;

use App\Filament\Resources\Jugadors\Pages\CreateJugador;
use App\Filament\Resources\Jugadors\Pages\EditJugador;
use App\Filament\Resources\Jugadors\Pages\ListJugadors;
use App\Filament\Resources\Jugadors\Schemas\JugadorForm;
use App\Filament\Resources\Jugadors\Tables\JugadorsTable;
use App\Models\Jugador;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JugadorResource extends Resource
{
    protected static ?string $model = Jugador::class;

    protected static ?string $navigationLabel = 'Jugadores';
    protected static ?string $modelLabel = 'Jugador';       
    protected static ?string $pluralModelLabel = 'Jugadores';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return JugadorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JugadorsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListJugadors::route('/'),
            'create' => CreateJugador::route('/create'),
            'edit' => EditJugador::route('/{record}/edit'),
        ];
    }
}
