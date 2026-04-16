<?php

namespace App\Filament\Resources\Barangs\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BarangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('barang_kode')
                ->required()
                ->maxLength(10),
                TextInput::make('barang_nama')
                ->required()
                ->maxLength(100),
                TextInput::make('harga_beli')
                ->required(),
                TextInput::make('harga_jual')
                ->required()
            ]);
    }
}
