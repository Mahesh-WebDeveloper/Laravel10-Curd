<?php

// F:\Laravel\testing\testing3\app\Models\studentfackermodel.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentfackermodel extends Model
{
    use HasFactory;
    protected $table = 'studentresult';
    public $timestamps = false;
}
