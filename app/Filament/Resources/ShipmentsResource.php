<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ShipmentsResource\Pages;
use App\Filament\Resources\ShipmentsResource\RelationManagers;
use App\Models\Shipments;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class ShipmentsResource extends Resource
{
    protected static ?string $model = Shipments::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ]);
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
            'index' => Pages\ListShipments::route('/'),
            'create' => Pages\CreateShipments::route('/create'),
            'edit' => Pages\EditShipments::route('/{record}/edit'),
        ];
    }
}
