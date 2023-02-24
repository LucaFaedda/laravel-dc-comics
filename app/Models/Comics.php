<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comics extends Model //era scritto male comics
{
    use HasFactory;

    protected $fillable = ['title','description','thumb','price', 'series', 'sale_date', 'type']; // ci serve per collegarlo allo store in comicControl
}
