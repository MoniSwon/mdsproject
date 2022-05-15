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
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('expedition_date'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('updated_at'),
                Tables\Columns\TextColumn::make('order_id'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('address_id'),


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
        ];
    }
}
