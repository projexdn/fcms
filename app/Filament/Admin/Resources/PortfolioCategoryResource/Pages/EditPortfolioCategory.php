<?php

namespace App\Filament\Admin\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Admin\Resources\PortfolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioCategory extends EditRecord
{
    protected static string $resource = PortfolioCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
