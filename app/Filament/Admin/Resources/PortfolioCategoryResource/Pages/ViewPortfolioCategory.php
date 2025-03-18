<?php

namespace App\Filament\Admin\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Admin\Resources\PortfolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPortfolioCategory extends ViewRecord
{
    protected static string $resource = PortfolioCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
