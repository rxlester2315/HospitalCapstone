<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messagess extends Model
{
    use HasFactory;
protected $table = 'messagess';


     protected $fillable = ['chat_session_id', 'user_id', 'message', 'from_admin'];

    public function chatSession()
    {
        return $this->belongsTo(ChatSession::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
