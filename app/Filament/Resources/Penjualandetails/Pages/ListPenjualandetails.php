<?php

namespace App\Filament\Resources\Penjualandetails\Pages;

use App\Filament\Resources\Penjualandetails\PenjualandetailResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenjualandetails extends ListRecords
{
    protected static string $resource = PenjualandetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
