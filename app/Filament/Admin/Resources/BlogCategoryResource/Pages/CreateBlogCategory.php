<?php

namespace App\Filament\Admin\Resources\BlogCategoryResource\Pages;

use App\Filament\Admin\Resources\BlogCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBlogCategory extends CreateRecord
{
    protected static string $resource = BlogCategoryResource::class;
}
