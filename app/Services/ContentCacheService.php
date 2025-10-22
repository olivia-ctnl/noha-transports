<?php

namespace App\Services;

use App\Models\Content;
use Illuminate\Support\Facades\Cache;

class ContentCacheService
{
    protected const CACHE_KEY = 'contents_all';
    protected const CACHE_DURATION = 3600; // 1 heure

    /**
     * Récupère tous les contenus depuis le cache ou la base de données
     */
    public function getAllContents(): array
    {
        return Cache::remember(
            self::CACHE_KEY,
            self::CACHE_DURATION,
            function () {
                return Content::all()->keyBy('key')->toArray();
            }
        );
    }

    /**
     * Récupère un contenu spécifique
     */
    public function get(string $key, $default = null)
    {
        $contents = $this->getAllContents();
        
        if (!isset($contents[$key])) {
            return $default;
        }

        $content = $contents[$key];

        // Traitement des images
        if ($content['type'] === 'image' && !empty($content['value'])) {
            return $this->processImageUrl($content['value']);
        }

        return $content['value'] ?? $default;
    }

    /**
     * Traite les URLs d'images
     */
    protected function processImageUrl(string $value): string
    {
        // URL complète
        if (str_starts_with($value, 'http://') || str_starts_with($value, 'https://')) {
            return $value;
        }

        // Storage public
        if (\Storage::disk('public')->exists($value)) {
            return \Storage::disk('public')->url($value);
        }

        // Public directory
        if (file_exists(public_path($value))) {
            return asset($value);
        }

        return $value;
    }

    /**
     * Vide le cache (à appeler lors de la mise à jour d'un contenu)
     */
    public function clearCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }
}