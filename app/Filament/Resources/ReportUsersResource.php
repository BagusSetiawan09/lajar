<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ReportUsersResource\Pages;
use App\Filament\Resources\ReportUsersResource\RelationManagers;
use App\Models\ReportUsers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ReportUsersResource extends Resource
{
    protected static ?string $model = ReportUsers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('report_type')
                ->options([
                    'JALAN BERLUBANG' => 'Jalan Berlubang',
                    'JALAN RUSAK' => 'Jalan Rusak',
                    'PEMBUATAN ZOSS' => 'Pembuatan ZoSS',
                ])
                    ->required(),
                Forms\Components\Select::make('status')
                ->options([
                    'DITERIMA' => 'Diterima',
                    'DIKONFIRMASI' => 'Dikonfirmasi',
                    'PERBAIKAN' => 'Perbaikan',
                    'SELESAI' => 'Selesai',
                ])
                    ->required(),
                Forms\Components\TextArea::make('street')
                    ->required(),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->modifyQueryUsing(function (Builder $query) {
            //     if (Auth::user()->role == 'Pengguna') {
            //         $userId = Auth::user()->id;
            //         $query->where('user', $userId);
            //     }
            // })
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('report_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('street')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListReportUsers::route('/'),
            'create' => Pages\CreateReportUsers::route('/create'),
            'edit' => Pages\EditReportUsers::route('/{record}/edit'),
        ];
    }
}
