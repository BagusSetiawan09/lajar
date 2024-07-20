<?php

namespace App\Filament\Resources\ReportTypesResource\Pages;

use App\Filament\Resources\ReportTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReportTypes extends ListRecords
{
    protected static string $resource = ReportTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
