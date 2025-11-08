<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Kandidat;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\KandidatResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KandidatResource\RelationManagers;

class KandidatResource extends Resource
{
    protected static ?string $model = Kandidat::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Management';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Data Pasangan')
                ->schema([
                    Select::make('ketua_id')
                        ->label('Ketua')
                        ->relationship('ketua', 'id')
                        ->getOptionLabelFromRecordUsing(fn($record) => $record->siswa->nama ?? '-')
                        ->searchable()
                        ->preload()
                        ->required(),

                    Select::make('wakil_id')
                        ->label('Wakil Ketua')
                        ->relationship('wakil', 'id')
                        ->getOptionLabelFromRecordUsing(fn($record) => $record->siswa->nama ?? '-')
                        ->searchable()
                        ->preload()
                        ->required()
                        ->rules([
                            function (callable $get) {
                                return function (string $attribute, $value, \Closure $fail) use ($get) {
                                    if ($value === $get('ketua_id')) {
                                        $fail('Ketua dan Wakil tidak boleh sama.');
                                    }
                                };
                            }
                        ]),

                    Textarea::make('visi')
                        ->label('Visi')
                        ->required(),

                    Textarea::make('misi')
                        ->label('Misi')
                        ->required(),

                    FileUpload::make('foto')
                        ->label('Foto Pasangan')
                        ->image()
                        ->directory('kandidat')
                        ->columnSpan(2),

                ])->columns(2),

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('ketua.siswa.nama')
                    ->searchable()
                    ->label('Ketua'),
                TextColumn::make('wakil.siswa.nama')
                    ->searchable()
                    ->label('Wakil'),
                ImageColumn::make('foto')
                    ->searchable(),
                TextColumn::make('jumlah_suara')
                    ->numeric(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
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
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListKandidats::route('/'),
            'create' => Pages\CreateKandidat::route('/create'),
            'view' => Pages\ViewKandidat::route('/{record}'),
            'edit' => Pages\EditKandidat::route('/{record}/edit'),
        ];
    }
}
