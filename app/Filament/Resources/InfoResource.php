<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InfoResource\Pages;
use App\Filament\Resources\InfoResource\RelationManagers;
use App\Models\Info;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InfoResource extends Resource
{
    protected static ?string $model = Info::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('twitter')
                    ->maxLength(255),
                Forms\Components\TextInput::make('github')
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin')
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\Textarea::make('about')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('resume')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('cv')
                ->directory('cv')
                ->downloadable(),
                Forms\Components\FileUpload::make('avatar')
                ->directory('avatar')
                ->image(),
                Forms\Components\TextInput::make('jop')
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('website')
                    ->maxLength(255),
                Forms\Components\TextInput::make('age')
                    ->maxLength(255),
                Forms\Components\TextInput::make('degree')
                    ->maxLength(255),
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('github')
                    ->searchable(),
                Tables\Columns\TextColumn::make('linkedin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('facebook')
                    ->searchable(),

                Tables\Columns\TextColumn::make('jop')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                    ->searchable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('age')
                    ->searchable(),
                Tables\Columns\TextColumn::make('degree')
                    ->searchable(),

                Tables\Columns\ImageColumn::make('avatar')
                    ->circular()
                    ->stacked(),

                Tables\Columns\TextColumn::make('about')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListInfos::route('/'),
            'create' => Pages\CreateInfo::route('/create'),
            'view' => Pages\ViewInfo::route('/{record}'),
            'edit' => Pages\EditInfo::route('/{record}/edit'),
        ];
    }
}
