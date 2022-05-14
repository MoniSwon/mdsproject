<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkOrderProductResource\Pages;
use App\Filament\Resources\LinkOrderProductResource\RelationManagers;
use App\Models\LinkOrderProduct;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class LinkOrderProductResource extends Resource
{
    protected static ?string $model = LinkOrderProduct::class;

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
            'index' => Pages\ListLinkOrderProducts::route('/'),
            'create' => Pages\CreateLinkOrderProduct::route('/create'),
            'edit' => Pages\EditLinkOrderProduct::route('/{record}/edit'),
        ];
    }
}
