<?php

namespace App\Filament\Resources\Penjualandetails;

use App\Filament\Resources\Penjualandetails\Pages\CreatePenjualandetail;
use App\Filament\Resources\Penjualandetails\Pages\EditPenjualandetail;
use App\Filament\Resources\Penjualandetails\Pages\ListPenjualandetails;
use App\Filament\Resources\Penjualandetails\Schemas\PenjualandetailForm;
use App\Filament\Resources\Penjualandetails\Tables\PenjualandetailsTable;
use App\Models\Penjualandetail;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenjualandetailResource extends Resource
{
    protected static ?string $model = Penjualandetail::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::DocumentText;

    protected static ?string $recordTitleAttribute = 'penjualandetail';

    public static function form(Schema $schema): Schema
    {
        return PenjualandetailForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenjualandetailsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPenjualandetails::route('/'),
            'create' => CreatePenjualandetail::route('/create'),
            'edit' => EditPenjualandetail::route('/{record}/edit'),
        ];
    }
}
