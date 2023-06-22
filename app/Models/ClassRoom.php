<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassRoom extends Model
{
    use HasFactory;

    protected $fillable =['name','student_id'];

    public function students():BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
