<?php

namespace App\Filament\Admin\Resources\BlogPostResource\Pages;

use App\Fcore\Trait\BlogPostResource\Edit;
use App\Filament\Admin\Resources\BlogPostResource;
use App\Models\BlogPost;
use App\Models\BlogPostMeta;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBlogPost extends EditRecord
{
    use Edit;

    protected static string $resource = BlogPostResource::class;
}
