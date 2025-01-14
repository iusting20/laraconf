<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PetPictures extends Page
{
    protected static ?string $navigationLabel = 'Pet Pictures';
    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static string $view = 'filament.resources.patient-resource.pages.pet-pictures';

    protected static bool $shouldRegisterNavigation = true;
    protected static ?int $navigationSort = 1;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\Action::make('upload')
                ->label('Add New Pet')
                ->icon('heroicon-o-arrow-up-tray')
                ->url(route('filament.admin.resources.patients.create')),
        ];
    }
} 