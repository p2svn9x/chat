<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = 'categorys';
    protected $primaryKey = 'id';

//    public function aricle()
//    {
//      //  return $this->hasMany(Article::class,'menu_id', 'id');
//    }


}
