<?php

namespace App\Filament\Resources\Jugadors\Pages;

use App\Filament\Resources\Jugadors\JugadorResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJugador extends EditRecord
{
    protected static string $resource = JugadorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
