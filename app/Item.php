<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable =[
        'item_name', 'description','category','condition','start_price','minimum_price'
        ,'end_day','inst_price', 'returns'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }
}
