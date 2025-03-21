<?php

namespace App\Filament\Admin\Resources\BlogPostMetaTemplateResource\Pages;

use App\Filament\Admin\Resources\BlogPostMetaTemplateResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogPostMetaTemplate extends CreateRecord
{
    protected static string $resource = BlogPostMetaTemplateResource::class;
}
