<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ContactUs extends Page
{
    protected static ?string $navigationLabel = 'Contact Us';
    protected static ?string $navigationIcon = 'heroicon-o-phone';
    protected static string $view = 'filament.pages.contact';
    protected static bool $shouldRegisterNavigation = true;
    protected static ?int $navigationSort = 3;
} 