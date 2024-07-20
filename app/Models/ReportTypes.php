<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportTypes extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_laporan',
        'is_expense',
        'deskripsi',
        'image'
    ];
}
