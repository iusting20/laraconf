<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPatients extends ListRecords
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('upload')
                ->label('Add New Pet')
                ->icon('heroicon-o-arrow-up-tray')
                ->url(route('filament.admin.resources.patients.create')),
            Actions\Action::make('Export')
                ->url(route('patients.export'))
                ->icon('heroicon-o-document-text')
                ->color('gray'),
        ];
    }
}
