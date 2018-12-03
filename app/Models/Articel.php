<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Articel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'id';
    public function category()
    {
        return $this->belongsTo(Category::class,'menu_id', 'id');

    }
}
