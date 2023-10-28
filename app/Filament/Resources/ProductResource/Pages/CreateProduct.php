<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Str;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (isset($data['featured_image'])) {
            $filename = Str::snake($data['featured_image']->getClientOriginalName());
            $data['featured_image'] = $data['featured_image']->storeAs('public/products', $filename);
        }

        return $data;
    }
}
