<?php

namespace App\Filament\Admin\Resources\BlogPostMetaTemplateResource\Pages;

use App\Filament\Admin\Resources\BlogPostMetaTemplateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBlogPostMetaTemplates extends ListRecords
{
    protected static string $resource = BlogPostMetaTemplateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
