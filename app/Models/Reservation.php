<?php


namespace App\Models;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['id_user', 'id_book','start_date',
    'end_date',];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book');
    }
    protected $casts = [
        'end_date' => 'date', // or 'datetime' if end_date includes time as well
    ];
}
