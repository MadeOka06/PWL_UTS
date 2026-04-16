<?php

namespace App\Filament\Resources\Penjualandetails\Pages;

use App\Filament\Resources\Penjualandetails\PenjualandetailResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenjualandetail extends EditRecord
{
    protected static string $resource = PenjualandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
