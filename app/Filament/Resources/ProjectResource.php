<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),

                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('client')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('project_date')
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->required()
                    ->maxLength(255)
                    ->url(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required()
                    ->directory('project_main_images'),
                Forms\Components\FileUpload::make('images')
                    ->image()
                    ->multiple()
                    ->required()
                    ->directory('project_images'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('client')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('project_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('images')
                ->circular()
                ->stacked(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'view' => Pages\ViewProject::route('/{record}'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
