<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    // 보드 컨트롤러에서 불러올 값
    protected $primaryKey = 'board_id';
}
