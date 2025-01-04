<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Resources\Pages\Page;

class PetPictures extends Page
{
    protected static string $resource = PatientResource::class;

    protected static string $view = 'filament.resources.patient-resource.pages.pet-pictures';

    protected static ?string $navigationLabel = 'Pet Pictures';
    protected static ?string $navigationIcon = 'heroicon-o-photograph';
    protected static bool $shouldRegisterNavigation = true;
}
