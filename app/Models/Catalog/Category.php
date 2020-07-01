<?php

namespace App\Models\Catalog;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Category extends Model implements TranslatableContract
{
    use NodeTrait;
    use Translatable;

    public $translatedAttributes = ['title', 'description'];
}
