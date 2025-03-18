<?php

namespace App\Filament\Admin\Resources\BlogPostResource\Pages;

use App\Filament\Admin\Resources\BlogPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBlogPost extends ViewRecord
{
    protected static string $resource = BlogPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
