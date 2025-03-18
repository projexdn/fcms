<?php

namespace App\Filament\Admin\Resources\PortfolioResource\Pages;

use App\Fcore\Trait\BlogPostResource\Edit;
use App\Filament\Admin\Resources\PortfolioResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolio extends EditRecord
{
    use Edit;

    protected static string $resource = PortfolioResource::class;
}
