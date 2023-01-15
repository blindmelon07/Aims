<?php

namespace App\Filament\Resources\MemberResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Models\Ticket;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class TicketRelationManager extends RelationManager
{
    protected static string $relationship = 'Ticket';

    protected static ?string $recordTitleAttribute = 'ticket_code';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('ticket_code')
                    //->multiple()
                    //->options(Ticket::pluck('member_id', 'ticket_code')) 
                    ->required(), 
                    Forms\Components\TextInput::make('asign_by')
                    ->required()
                    ->maxLength(255), 

                   
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ticket_code'),
                Tables\Columns\TextColumn::make('member_id'),
                Tables\Columns\TextColumn::make('asign_by'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                //Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
