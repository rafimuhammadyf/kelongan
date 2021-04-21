<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_items', 
        'id_users', 
        'qty'
    ];
    protected $table = "cart";
    protected $primaryKey = "id_items"; 

    public function cart(){
        return $this->belongsTo('App\Models\Items', 'id', 'id_users');
    }
}