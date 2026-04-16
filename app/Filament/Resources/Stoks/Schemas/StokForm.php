<?php

namespace App\Filament\Resources\Stoks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StokForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('stok_tanggal')
                ->required(),
                TextInput::make('stok_jumlah')
                ->required()
            ]);
    }
}
