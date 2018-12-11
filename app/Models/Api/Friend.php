<?php
namespace App\Models\Api;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'friends';
    protected $primaryKey = 'id';
    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');

    }
}
