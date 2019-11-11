<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    protected $table = 'author';
    public $timestamps = false;
    protected $fillable = ['firstname','lastname'];

    /**
     * @return HasMany
     */
    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('lastname', 'asc');
    }

    public function __toString()
    {
        return (string) ($this->firstname . ' ' . $this->lastname);
    }
}
