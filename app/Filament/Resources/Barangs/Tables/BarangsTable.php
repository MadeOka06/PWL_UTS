<?php

namespace App\Filament\Resources\Barangs\Tables;

use App\Models\barang;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BarangsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('barang_id'),
                TextColumn::make('kategori.kategori_nama')
                ->label('Nama Kategori'),
                TextColumn::make('barang_kode'),
                TextColumn::make('barang_nama'),
                TextColumn::make('harga_beli'),
                TextColumn::make('harga_jual')
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
