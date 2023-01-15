<?php

namespace App\Filament\Resources\MemberBulanResource\Pages;

use App\Filament\Resources\MemberBulanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMemberBulans extends ListRecords
{
    protected static string $resource = MemberBulanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
