<?php

namespace App\Filament\Admin\Resources\PortfolioCategoryResource\Pages;

use App\Filament\Admin\Resources\PortfolioCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioCategories extends ListRecords
{
    protected static string $resource = PortfolioCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
