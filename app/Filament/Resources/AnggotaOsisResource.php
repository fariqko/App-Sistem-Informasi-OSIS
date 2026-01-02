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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use App\Filament\Resources\AnggotaOsisResource\Pages;
use Filament\Forms\Components\Section;

class AnggotaOsisResource extends Resource
{
    protected static ?string $model = AnggotaOsis::class;
    protected static ?string $navigationGroup = 'Manajemen OSIS';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?int $navigationSort = 1;

    public static function getNavigationBadge(): ?string
    {
        return (string) \App\Models\AnggotaOsis::count();
    }


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
                Section::make('Data Anggota OSIS')
                    ->schema([
                        Select::make('periode_id')
                            ->relationship('periode', 'nama_periode')
                            ->required()
                            ->preload()
                            ->reactive()
                            ->default(fn() => Periode::where('status', true)->value('id'))
                            ->native(false),
                        Select::make('siswa_id')
                            ->relationship('siswa', 'nama', fn($query) => $query->with('kelas'))
                            ->getOptionLabelFromRecordUsing(fn($record) => "{$record->nama} - {$record->kelas?->kode_kelas}")
                            ->searchable(['nama', 'nis'])
                            ->preload()
                            ->required()
                            ->reactive(),
                        Select::make('bagian')
                            ->options([
                                'BPH' => 'BPH (Badan Pengurus Harian)',
                                'Sekbid 1' => 'Sekbid 1 - Keagamaan & Ketuhanan',
                                'Sekbid 2' => 'Sekbid 2 - Berkehidupan Berbangsa & Bernegara',
                                'Sekbid 3' => 'Sekbid 3 - Pendidikan Pendahuluan & Bela Negara',
                                'Sekbid 4' => 'Sekbid 4 - Kedisiplinan & Budi Pekerti Luhur',
                                'Sekbid 5' => 'Sekbid 5 - Kepemimpinan Berorganisasi Pendidikan & Politik ',
                                'Sekbid 6' => 'Sekbid 6 - Kewirausahaan & Keterampilan',
                                'Sekbid 7' => 'Sekbid 7 - Kebugaran Jasmani & Daya Kreasi Seni',
                                'Sekbid 8' => 'Sekbid 8 - Presepsi Apresiasi & Daya Kreasi Seni',
                            ])
                            ->native(false)
                            ->required()
                            ->reactive(),
                        Select::make('jabatan')
                            ->required()
                            ->options(fn(callable $get) => match ($get('bagian')) {
                                'BPH' => [
                                    'Ketua Umum' => 'Ketua Umum',
                                    'Wakil Ketua' => 'Wakil Ketua',
                                    'Sekretaris 1' => 'Sekretaris 1',
                                    'Sekretaris 2' => 'Sekretaris 2',
                                    'Bendahara 1' => 'Bendahara 1',
                                    'Bendahara 2' => 'Bendahara 2',
                                ],
                                default => $get('bagian') ? [
                                    "Ketua" . $get('bagian')   => "Ketua " . $get('bagian'),
                                    "Anggota" . $get('bagian') => "Anggota " . $get('bagian'),
                                ] : []
                            })
                            ->disabled(fn(callable $get) => ! $get('bagian'))
                            ->native(false)
                            ->rule('unique:anggota_osis,jabatan')
                            ->validationMessages([
                                'unique' => 'Jabatan ini sudah ada.'
                            ])
                            ->reactive(),
                        DatePicker::make('tanggal_bergabung')
                            ->required()
                            ->default(now())
                            ->native(false),
                    ])->columns(2),
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
                    ->default(fn() => Periode::where('status', true)->value('id'))
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
