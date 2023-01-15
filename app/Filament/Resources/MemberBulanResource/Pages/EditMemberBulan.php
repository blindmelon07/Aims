<?php

namespace App\Filament\Resources\MemberBulanResource\Pages;

use App\Filament\Resources\MemberBulanResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMemberBulan extends EditRecord
{
    protected static string $resource = MemberBulanResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
