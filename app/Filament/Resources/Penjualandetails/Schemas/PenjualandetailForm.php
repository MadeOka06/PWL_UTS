<?php

namespace App\Filament\Resources\Penjualandetails\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PenjualandetailForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('penjualan_id')
                ->label('ID Penjualan')
                ->relationship('penjualan' , 'penjualan_id')
                ->searchable()
                ->preload()
                ->required(),
                Select::make('barang_id')
                ->label('ID Barang')
                ->relationship('barang' , 'barang_id')
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('harga')
                ->required(),
                TextInput::make('jumlah')
                ->required()
            ]);
    }
}
