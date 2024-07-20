<?php

namespace App\Filament\Resources\ReportTypesResource\Pages;

use App\Filament\Resources\ReportTypesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReportTypes extends EditRecord
{
    protected static string $resource = ReportTypesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
