<?php

namespace App\Filament\Users\Resources\EventApplicationResource\Pages;

use App\Filament\Users\Resources\EventApplicationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEventApplication extends CreateRecord
{
    protected static string $resource = EventApplicationResource::class;
}