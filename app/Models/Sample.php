<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_id',
        'sample_name',
        'sample_cost',
        'length',
        'width',
        'thickness',
        'image',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
