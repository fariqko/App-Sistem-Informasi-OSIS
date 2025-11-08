<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Periode;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\AnggotaOsis;
use Illuminate\Validation\Rule;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\AnggotaOsisResource\Pages;

class AnggotaOsisResource extends Resource
{
    protected static ?string $model = AnggotaOsis::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Management';

    public static function getLabel(): string
    {
        return 'Anggota Osis';
    }

    public static function getPluralLabel(): string
    {
        return 'Anggota Osis';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('siswa_id')
                    ->relationship('siswa', 'nama')
                    ->searchable()
                    ->placeholder('Nama Siswa')
                    ->required(),
                Select::make('jabatan')
                    ->label('Jabatan')
                    ->options([
                        'Ketua' => 'Ketua',
                        'Wakil Ketua' => 'Wakil Ketua',
                        'Sekretaris 1' => 'Sekretaris 1',
                        'Sekretaris 2' => 'Sekretaris 2',
                        'Bendahara 1' => 'Bendahara 1',
                        'Bendahara 2' => 'Bendahara 2',
                        'Anggota' => 'Anggota',
                    ])
                    ->default('Anggota')
                    ->rules(function (callable $get) {
                        $jabatan = $get('jabatan');

                        if (in_array($jabatan, [
                            'Ketua',
                            'Wakil Ketua',
                            'Sekretaris 1',
                            'Sekretaris 2',
                            'Bendahara 1',
                            'Bendahara 2'
                        ])) {
                            return [
                                Rule::unique('anggota_osis', 'jabatan')
                                    ->where(fn($query) => $query->where('jabatan', $jabatan))
                            ];
                        }
                        return [];
                    })
                    ->native(false)
                    ->required(),
                DatePicker::make('tanggal_bergabung')
                    ->required()
                    ->native(false),
                Select::make('periode_id')
                    ->relationship('periode', 'nama_periode')
                    ->required()
                ->default(fn() => Periode::where('aktif', true)->value('id'))
                ->native(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('siswa.nama')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('jabatan'),
                TextColumn::make('tanggal_bergabung')
                    ->date()
                    ->sortable(),
                TextColumn::make('periode.nama_periode')
                    ->numeric()
                    ->sortable(),
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
                SelectFilter::make('periode_id')
                    ->label('Periode')
                    ->relationship('periode', 'nama_periode')
                    ->default(fn() => Periode::where('aktif', true)->value('id'))
                    ->native(false)
                    ->selectablePlaceholder(false),
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
            'index' => Pages\ListAnggotaOses::route('/'),
            'create' => Pages\CreateAnggotaOsis::route('/create'),
            'view' => Pages\ViewAnggotaOsis::route('/{record}'),
            'edit' => Pages\EditAnggotaOsis::route('/{record}/edit'),
        ];
    }
}
