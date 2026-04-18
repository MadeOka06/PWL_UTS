<?php

namespace App\Filament\Resources\Stoks\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class StoksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('stok_id'),
                TextColumn::make('supplier.supplier_nama')
                ->label('Nama Supplier'),
                TextColumn::make('barang.barang_nama')
                ->label('Nama Barang'),
                TextColumn::make('user.nama')
                ->label('Nama User'),
                TextColumn::make('stok_tanggal'),
                TextColumn::make('stok_jumlah')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
