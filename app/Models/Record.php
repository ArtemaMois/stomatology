<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'fullname',
        'phone',
        'email',
        'date'
    ];


    public function formattedDate()
    {
        return Carbon::make($this->date)->format("d M");
    }

    public function formattedTime()
    {
        return Carbon::make($this->date)->format("H:i");
    }


}
