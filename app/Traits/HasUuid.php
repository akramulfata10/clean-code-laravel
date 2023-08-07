<?php 

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait HasUuid {
    public static function bootHasUuid() {
        static::creating(
            fn(Model $model) => $model->uuid = Str::uuid()->toString(),
        );
    }
}