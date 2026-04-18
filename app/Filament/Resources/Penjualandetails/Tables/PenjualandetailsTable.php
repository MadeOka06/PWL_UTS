<?php

namespace App\Filament\Resources\Penjualandetails\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PenjualandetailsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('detail_id'),
                TextColumn::make('penjualan.penjualan_kode')
                ->label('Penjualan Kode'),
                TextColumn::make('barang.barang_nama')
                ->label('Nama Barang'),
                TextColumn::make('harga'),
                TextColumn::make('jumlah')
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
