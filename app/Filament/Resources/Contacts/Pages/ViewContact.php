<?php

namespace App\Filament\Resources\Contacts\Pages;

use Filament\Actions;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\Contacts\ContactResource;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // Marquer automatiquement le message comme lu lors de la consultation
    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (!$data['is_read']) {
            $this->record->update(['is_read' => true]);
            $data['is_read'] = true;
        }

        return $data;
    }
}