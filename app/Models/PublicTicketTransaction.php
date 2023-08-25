<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicTicketTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'game_id',
        'amount',
        'draw_date',
        'ticket_date',
        'soft_delete',
    ];
}
