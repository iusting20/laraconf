<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Resources\Pages\Page;

class Sort extends Page
{
    protected static string $resource = PatientResource::class;

    protected static string $view = 'filament.resources.patient-resource.pages.sort';
}
