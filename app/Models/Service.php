<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'home_page_description',
        'home_page_image',
        'show_on_home_page',
        'details',
    ];

    public static function booted(): void
    {
        self::creating(function (Service $service) {
            $service->hash = self::generateHash();
        });
    }

    public function getRouteKey(): string
    {
        return Str::slug($this->name) . '-' . $this->getAttribute($this->getRouteKeyName());
    }

    public function getRouteKeyName(): string
    {
        return 'hash';
    }

    public function resolveRouteBinding($value, $field = null): ?Model
    {
        $id = last(explode('-', $value));

        $model = parent::resolveRouteBinding($id, $field);

        if (!$model || $model->getRouteKey() === $value) {
            return $model;
        }

        throw new HttpResponseException(
            redirect()->to(route('services.show', $model)),
        );
    }

    public static function generateHash(): string
    {
        $hash = Str::random(12);

        while (Service::where('hash', $hash)->exists()){
            $hash = Str::random(12);
        }

        return $hash;
    }
}
