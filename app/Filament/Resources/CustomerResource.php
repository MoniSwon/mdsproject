<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Filament\Resources\CustomerResource\RelationManagers;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Livewire\Component;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $recordTitleAttribute = 'last_name';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('last_name')->required(),
                Forms\Components\TextInput::make('first_name')->required(),
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('password')
                    ->required()
                    ->hiddenOn(Pages\EditUser::class),
                Forms\Components\Select::make('roles_id')
                    ->options([
                        '1' => 'Client',
                        '2' => 'Ambassadrice',
                        '3' => 'Etudiant',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('phone'),
                Forms\Components\Select::make('gender')
                    ->options([
                        'M' => 'M',
                        'F' => 'F',
                        'N/A' => 'N/A'
                    ])
                    ->required(),
                Forms\Components\Select::make('status')
                    ->options([
                        'inactif' => 'inactif',
                        'actif' => 'actif'
                    ])
                    ->required(),
                Forms\Components\TextInput::make('address_id'),
                Forms\Components\TextInput::make('invoice_address_id'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('last_name'),
                Tables\Columns\TextColumn::make('first_name'),
                Tables\Columns\TextColumn::make('created_at'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('roles_id'),
                Tables\Columns\TextColumn::make('phone'),
                Tables\Columns\TextColumn::make('gender'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('address_id'),
                Tables\Columns\TextColumn::make('invoice_address_id'),
                Tables\Columns\TextColumn::make('inactive_date'),
                Tables\Columns\TextColumn::make('inactive_reason'),
            ])
            ->defaultSort('created_at')
            ->filters([
                Filter::make('actif', fn ($query) => $query->where('status', 'actif')),
                Filter::make('inactif', fn ($query) => $query->where('status', 'inactif')),
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }
}
