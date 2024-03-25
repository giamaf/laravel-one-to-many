<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'slug', 'content', 'is_completed'];

    public function getFormatDate($date, $format = 'd-m-Y')
    {
        return Carbon::create($this->$date)->format($format);
    }

    public function renderImage()
    {
        return asset('storage/' . $this->image);
    }

    //! Si definisce come un metodo ma si legge come proprietà. Es: ($project->type->label)
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
