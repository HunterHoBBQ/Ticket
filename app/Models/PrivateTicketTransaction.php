<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrivateTicketTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'credit',
        'transaction_id',
        'ticket_status',
        'soft_delete',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
