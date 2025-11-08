<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Periode;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PeriodeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PeriodeResource\RelationManagers;

class PeriodeResource extends Resource
{
    protected static ?string $model = Periode::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_periode')
                    ->required(),
                DatePicker::make('mulai')
                    ->native(false),
                DatePicker::make('selesai')
                    ->native(false),
                Toggle::make('aktif')
                    ->label('Periode Aktif')
                    ->afterStateUpdated(
                        function ($record, $state) {
                            if ($state === true) {
                                Periode::where('id', '!=', $record->id)
                                    ->update(['aktif' => false]);
                            }
                        }
                    ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_periode')
                    ->label('Nama Peoriode')
                    ->searchable(),
                TextColumn::make('mulai')
                    ->date('d-m-Y')
                    ->searchable(),
                TextColumn::make('selesai')
                    ->date('d-m-Y')
                    ->searchable(),
                ToggleColumn::make('aktif')
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
            'index' => Pages\ListPeriodes::route('/'),
            'create' => Pages\CreatePeriode::route('/create'),
            'view' => Pages\ViewPeriode::route('/{record}'),
            'edit' => Pages\EditPeriode::route('/{record}/edit'),
        ];
    }
}
