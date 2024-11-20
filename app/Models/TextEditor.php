<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TextEditor extends Model
{
    //
    use HasFactory;
    protected $table = "text_editors";
    protected $fillable = ["type", "name"];
}
