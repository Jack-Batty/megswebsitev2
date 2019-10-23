<?php

namespace Modules\Portfolio\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use Translatable;

    protected $table = 'portfolio__portfolios';
    public $translatedAttributes = [];
    protected $fillable = [];

    
}
