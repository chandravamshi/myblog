<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;
use App\Post;

class Post extends Model
{
    //
    protected $guarded=[];

    public function comments()
    {
          return $this->hasMany(Comment::class);
    }

    public function user()
    {
          return $this->belongsTo(User::class);
    }

    public function scopeFilter($query,$filters)
    {
      
      

     
          if ($filters != null) {

            if ($month = $filters['month']) {
             $query->WhereMonth('created_at',Carbon::parse($month)->month);
            }

          if ($year = $filters['year']) {
            
            $query->WhereMonth('created_at',Carbon::parse($month)->month);
      }
}

          
    }

    public static function archives()
    {
      return static::selectraw('year(created_at) year , monthname(created_at) month ,count(*) published')
      ->groupBy('year','month')
       ->orderByRaw('min(created_at) desc')
      ->get()->toArray();
    }

    public static function allpost()
    {

      $allpost = Post::latest()->get();

      return  $allpost;
    }

}
