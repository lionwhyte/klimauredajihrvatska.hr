<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'slug', 'logo', 'company', 'location', 'website', 'email', 'description', 'tags']; //ovo navodimo da bi omogucili ubacivanje novih podataka u bazu ili možemo ubaciti u appServiceProvider pod boot "Model::unguard()"

    public function scopeFilter($query, array $filters)
    {
        if ($filters['tag'] ?? false) { //ako je $filters['tag'] null onda je false i ne izvrsava se query
            $query->where('tags', 'like', '%' . request('tag') . '%');
        };

        if ($filters['search'] ?? false) { //ovdje mozda bolje elif staviti da se nemogu dva queryja raditi bezpotrebno
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%');
        };
    }

    //relationship to user
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); //user_id cak ne treba navoditi jedino ako je neki drugaciji naziv
        //ova funkcija definira koji listing pripada kojem useru
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($listing) {
            $listing->slug = Str::slug($listing->company);
        });
    }
}
