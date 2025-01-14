<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-wrench';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 10;
}
