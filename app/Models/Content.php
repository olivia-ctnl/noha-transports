<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
    protected $fillable = [
        'key',
        'value',
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

    public function setImageValueAttribute($value)
    {
        // Si le champ image_value est rempli (même si c'est null, on met à jour 'value')
        // On suppose que l'image est uploadée et que $value est le chemin du fichier.
        $this->attributes['value'] = $value;
    }
}
