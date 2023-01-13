<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Member;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;
use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\MemberResource\RelationManagers\TicketRelationManager;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('clientid')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('fullname')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('address')
                ->required()
                ->maxLength(255),
                Forms\Components\DatePicker::make('dateofbirth')
                ->required(),
                Forms\Components\TextInput::make('age')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('cellnumber')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('branch_name')
                ->required()
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('clientid')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('fullname')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('address')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('dateofbirth')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('age')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('gender')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('cellnumber')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('branch_name')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
                FilamentExportBulkAction::make('export')
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            TicketRelationManager::class
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }    
}
