<?php

namespace App\Filament\Resources\Penjualandetails\Pages;

use App\Filament\Resources\Penjualandetails\PenjualandetailResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePenjualandetail extends CreateRecord
{
    protected static string $resource = PenjualandetailResource::class;
     protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
