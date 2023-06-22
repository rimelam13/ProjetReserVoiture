<?php

namespace App\Filament\Resources\VoitureResource\Pages;

use App\Filament\Resources\VoitureResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoiture extends EditRecord
{
    protected static string $resource = VoitureResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
