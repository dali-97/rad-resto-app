<?php

namespace App\Filament\Resources\PlatResource\Pages;

use App\Filament\Resources\PlatResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPlats extends ListRecords
{
    protected static string $resource = PlatResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
