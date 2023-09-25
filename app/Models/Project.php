<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'type',
      'short_desc',
      'link',
      'link_title',
      'long_desc',
      'date',
      'image'
    ];
}
