<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                Select::make('level_id')
                ->relationship('level' , 'level_id')
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('username')
                ->required()
                ->maxLength(20),
                TextInput::make('nama')
                ->required()
                ->maxLength(100),
                TextInput::make('email')
                ->required(),
                TextInput::make('password')
                ->required()
                ->maxLength(255)
            ]);
    }
}
