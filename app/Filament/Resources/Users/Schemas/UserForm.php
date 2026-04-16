<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
                TextInput::make('user_id'),
                TextInput::make('level_id')
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
