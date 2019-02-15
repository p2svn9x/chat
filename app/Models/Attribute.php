<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Attribute extends Model
{
    protected $table = 'attributes';
    protected $primaryKey = 'id';

    public function categorys()
    {
       // return $this->hasMany(Category::class,'id', 'category_id');
        return $this->belongsTo(Category::class,'category_id', 'id');
    }


}
