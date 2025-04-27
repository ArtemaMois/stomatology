<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MinifiedFeedbackResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'fullname' => $this->fullname,
            'rating' => mb_str_pad(str_repeat('★', $this->rating), 5, '☆',STR_PAD_RIGHT),
            'body' => $this->body,
            'createdAt' => Carbon::make($this->created_at)->format('d.m.Y')
        ];
    }
}
