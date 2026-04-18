<?php

namespace App\Filament\Resources\Stoks\Schemas;

use DateTime;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StokForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('supplier_id')
                ->label('ID Supplier')
                ->relationship('supplier','supplier_id')
                ->searchable()
                ->preload()
                ->required(),
                Select::make('barang_id')
                ->label('ID Barang')
                ->relationship('barang' , 'barang_id')
                ->searchable()
                ->preload()
                ->required(),
                Select::make('user_id')
                ->label('ID User')
                ->relationship('user' , 'user_id')
                ->searchable()
                ->preload()
                ->required(),
                DateTimePicker::make('stok_tanggal')
                ->default(now())
                ->required(),
                TextInput::make('stok_jumlah')
                ->required()
            ]);
    }
}
