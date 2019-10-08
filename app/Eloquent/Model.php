<?php

namespace App\Eloquent;

use App\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    public function myNewCollection(array $models = [])
    {
        return new Collection($models);
    }

    /**
     * Create a collection of model objects and return the instance.
     *
     * @param array $elements
     *
     * @return Collection
     */
    public static function myCreateMany(array $elements)
    {
        if (!count($elements)) {
            return new Collection();
        }
        $models = [];
        foreach ($elements as $attributes) {
            $models[] = static::create($attributes);
        }

        return new Collection($models);
    }

    /**
     * Create a new basic model object and return the instance.
     *
     * @param array $attributes
     *
     * @return Model
     */
    public static function myCreateModel(array $attributes)
    {
        return new static($attributes);
    }

    /**
     * Create a new basic model object and return the instance.
     *
     * @param array $elements
     *
     * @return array
     */
    public static function myCreateModels(array $elements)
    {
        $models = [];
        foreach ($elements as $attributes) {
            $models[] = new static($attributes);
        }

        return $models;
    }

    public function myScopeOfUser($query, $type)
    {
        return $query->whereUserId($type);
    }

    public function myScopeAuth($query)
    {
        return $query->whereUserId(\Auth::user()->id);
    }
}
