<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CandidateResource\Pages;
use App\Filament\Resources\CandidateResource\RelationManagers;
use App\Models\Candidate;
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

class CandidateResource extends Resource
{
    protected static ?string $model = Candidate::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('photo')
                        ->label('Photo')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('domaine')
                        ->label('Domaine')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('description')
                        ->label('Description')
                        ->required()
                        ->maxLength(255),


                    TextInput::make('nationality')
                        ->label('Nationalité')
                        ->required()
                        ->maxLength(255),

                    TextInput::make('cv')
                        ->label('CV')
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
                TextColumn::make('Photo')->sortable()->searchable(),
                TextColumn::make('Domaine'),
                TextColumn::make('Description')->sortable()->searchable(),
                TextColumn::make('Nationalité')->sortable(),
                TextColumn::make('Cv'),

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
            'index' => Pages\ListCandidates::route('/'),
            'create' => Pages\CreateCandidate::route('/create'),
            'view' => Pages\ViewCandidate::route('/{record}'),
            'edit' => Pages\EditCandidate::route('/{record}/edit'),
        ];
    }
}
