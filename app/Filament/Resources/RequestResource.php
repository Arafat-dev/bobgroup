<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RequestResource\Pages;
use App\Filament\Resources\RequestResource\RelationManagers;
use App\Models\Request;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RequestResource extends Resource
{
    protected static ?string $model = Request::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('title')
                        ->label('Titre')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('type')
                        ->label('Type')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('description')
                        ->label('Description')
                        ->required()
                        ->maxLength(255),


                    TextInput::make('city')
                        ->label('Ville')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('salary')
                        ->label('Salaire')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('preference')
                    ->label('Preference')
                    ->required()
                    ->maxLength(255),


                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('user_id')->sortable()->searchable(),
                TextColumn::make('Titre')->sortable()->searchable(),
                TextColumn::make('Type'),
                TextColumn::make('Description')->sortable()->searchable(),
                TextColumn::make('Ville')->sortable(),
                TextColumn::make('Salaire'),
                TextColumn::make('Preference')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListRequests::route('/'),
            'create' => Pages\CreateRequest::route('/create'),
            'view' => Pages\ViewRequest::route('/{record}'),
            'edit' => Pages\EditRequest::route('/{record}/edit'),
        ];
    }
}
