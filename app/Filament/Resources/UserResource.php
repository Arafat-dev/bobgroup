<?php

namespace App\Filament\Resources;


use App\Filament\Resources\UserResource\Widgets\StatsOverview;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Pages\CreateRecord;
use Filament\Resources\Pages\Page;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Testing\Fluent\Concerns\Has;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')
                    ->label('Nom')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('last_name')
                    ->label('Prenom')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('identity_number')
                    ->label('Numero CIN')
                    ->required()
                    ->maxLength(255),


                    TextInput::make('city')
                    ->label('Ville')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('address')
                    ->label('Adresse')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('phone_number')
                    ->label('Telephone')
                    ->required()
                    ->maxLength(255),



                    TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->maxLength(255),

                    TextInput::make('password')
                    ->label('Mot de passe')
                    ->password()
                    ->required(fn(Page $livewire):bool => $livewire instanceof CreateRecord)
                    ->minLength(8)
                    ->same('passwordConfirmation')
                    ->dehydrated(fn ($state) => filled($state))
                    ->dehydrateStateUsing(fn( $state) => Has::make($state)),

                    TextInput::make('passwordConfirmation')
                    ->password()
                    ->label('Confirmation Mot de Passe')
                    ->required(fn(Page $livewire):bool => $livewire instanceof CreateRecord)
                    ->minLength(8)
                    ->dehydrated(false)

                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('Nome')->sortable()->searchable(),
                TextColumn::make('Prenom')->sortable()->searchable(),
                TextColumn::make('Numero CIN'),
                TextColumn::make('Ville')->sortable()->searchable(),
                TextColumn::make('Addresse')->sortable(),
                TextColumn::make('Telephone'),
                TextColumn::make('email')->sortable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }
}
