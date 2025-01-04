<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class PetPictures extends Page
{
    protected static ?string $navigationLabel = 'Pet Pictures';
    protected static ?string $navigationIcon = 'heroicon-o-camera';
    protected static string $view = 'filament.resources.patient-resource.pages.pet-pictures';

    protected static bool $shouldRegisterNavigation = true;
} 