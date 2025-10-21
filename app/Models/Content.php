<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'key',
        'value',
        'image_value',
        'type',
        'category',
        'page',
        'section',
        'label',
        'description',
    ];

    // Méthode helper pour récupérer un contenu
    public static function getValue($key, $default = null)
    {
        return static::where('key', $key)->value('value') ?? $default;
    }

    // Nouvelles méthodes helpers
    public static function getBySection($page, $section)
    {
        return static::where('page', $page)
                    ->where('section', $section)
                    ->get();
    }

    public static function getByPage($page)
    {
        return static::where('page', $page)->get();
    }

    protected static function booted()
    {
    static::saving(function ($content) {
        // Si c'est une image, vérifier si on a un nouveau fichier uploadé
        if ($content->type === 'image') {
            // Vérifier dans les attributs (priorité 1)
            if (isset($content->attributes['image_value']) && $content->attributes['image_value']) {
                $content->value = $content->attributes['image_value'];
                unset($content->attributes['image_value']);
            }
            // Vérifier comme propriété (priorité 2)
            elseif (isset($content->image_value) && $content->image_value) {
                $content->value = $content->image_value;
            }
        }
    });
    }

// Accesseur pour charger la valeur d'image dans le champ image_value
public function getImageValueAttribute()
{
    return $this->type === 'image' ? $this->value : null;
}
}
