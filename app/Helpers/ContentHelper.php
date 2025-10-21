<?php

use App\Models\Content;
use Illuminate\Support\Facades\Storage;

if (!function_exists('content')) {
    function content($key, $default = null)
    {
        $content = Content::where('key', $key)->first();
        
        if (!$content) {
            return $default;
        }
        
        // Si c'est une image
        if ($content->type === 'image' && $content->value) {
            $value = $content->value;
            
            // 1. Vérifier si c'est une URL complète (http:// ou https://)
            if (str_starts_with($value, 'http://') || str_starts_with($value, 'https://')) {
                return $value;
            }
            
            // 2. Vérifier si le fichier existe dans storage/app/public
            if (Storage::disk('public')->exists($value)) {
                return Storage::disk('public')->url($value);
            }
            
            // 3. Vérifier si le fichier existe directement dans public/
            if (file_exists(public_path($value))) {
                return asset($value);
            }
            
            // 4. Fallback : retourner la valeur telle quelle
            return $value;
        }
        
        // Retourner la valeur normale pour les textes
        return $content->value ?? $default;
    }
}
