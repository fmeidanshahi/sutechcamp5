<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Post extends Model
{
   // use HasFactory;

//    protected $fillable = [
//         'title', 'slug', 'content', ''
//     ];

protected $guarded = [];


public function category() {
    return $this->belongsTo(Category::class);
}
public function user(){
    return $this->belongsTo(User::class);
}

public function comments(){
    $this->hasMany(Comment::class);
}

public function excerpt() {
    return Str::words($this->content, 20);
}

public function the_content() {

    if ($this->type == 1){
        return $this->content;
    }elseif(!auth()->check()){
        $output = Str::words($this->content, 150);
        $output .= '<div class="need-vip"><div class="vip-box"><div class="icons"><i class="fas fa-sad-tear"></i></div><div class="text">برای خواندن ادامه این مطلب بایستی حساب خود را ارتقا دهید!</div><a class="btn btn-upgrade" href="http://localhost:8000/login" role="button" ><i class="fas fa-crown"></i><span>ورود به حساب</span></a></div>';
        $output .= '<div class="blurred-bg">';
        $output .= Str::substr($this->content , 150);  
        $output .= '</div></div>';
        return $output;

    }elseif(auth()->user()->id == $this->user->id){
        return $this->content;
    }elseif(!auth()->user()->is_vip()){
        $output = Str::words($this->content, 150);
        $output .= '<div class="need-vip"><div class="vip-box"><div class="icons"><i class="fas fa-sad-tear"></i></div><div class="text">برای خواندن ادامه این مطلب بایستی حساب خود را ارتقا دهید!</div><button class="btn-upgrade" type="submit" data-bs-toggle="modal" data-bs-target="#upgrade_account"><i class="fas fa-crown"></i><span>ارتقاء حساب</span></button></div>';
        $output .= '<div class="blurred-bg">';
        $output .= Str::substr($this->content , 150);  
        $output .= '</div></div>';
        return $output;
    }else{
        return $this->content;
    }

}
    
    public function incrementViews(){
        $this->views++;
        return $this->save();
    }

    public function commentsCount(){
        return $this->hasMany('App\Models\Comment');
    }

    public function incrementRaters(){
        $this->raters++;
        return $this->save();
    }

}
