<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {

        // show all posts
//       $posts = DB::table('posts')->get();
//       $posts = Post::orderBy('id', 'DESC')->get();

        $posts = Post::limit(6)->orderByDesc('created_at')->get();
        $trendingPosts = Post::limit(8)->orderByDesc('views')->get();        
        return view('index', ['posts'=>$posts , 'trendingPosts'=>$trendingPosts]);
    }

//    public function single($slug) {
//        $post = Post::where('slug', $slug)->first();

    public function single( Post $post) {

        $post->incrementViews();

        //dd($post->category->name);
        $comments = Comment::where('post_id' ,$post->id )->orderByDesc('created_at')->get();
        
        return view('single', ['post' => $post , 'comments' => $comments ]);
                                    // ['post' => $post]
    }

    public function newRate(Request $request , Post $post) {
        //validate
        $this->validate(request(), [
            'rating'   => 'required',
        ]);

        $rate_id = $request->input('rating');
        //dd($rate_id);
        $sum = ($rate_id) + ($post->raters * $post->rate);
        $post->incrementRaters();
        //dd($post->raters);
        $new_rate = $sum/$post->raters;
        $post->rate = $new_rate;
        //dd($post->rate);

         $post->update();

         return redirect()->back()->with(['message'=>
        '<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true"><div class="d-flex"><div class="toast-body">امتیاز شما با موفقیت ثبت شد.</div><button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button></div></div>'
        ]);
        
    }


    public function supportTheAuthor(Request $request , Post $post) {
        $this->validate(request(), [
            'money'   => 'required',
        ]);

        $moneyy = $request->input('money');
        $user = auth()->user();
        // if (!auth()->check()) return redirect()->route('login');
        if($moneyy < 1000){
            http_response_code(400);
            return '<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true"><div class="d-flex"><div class="toast-body">مبلغ حمایت حداقل باید ۱۰۰۰ تومان باشد.</div><button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button></div></div>';
        }elseif($user->wallet < $moneyy ){
            http_response_code(400);
            return '<div class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true"><div class="d-flex"><div class="toast-body">موجودی شما کافی نیست.</div><button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button></div></div>';
        }else{
            http_response_code(200);
        $user->wallet -= $moneyy;
        $post->user->wallet += $moneyy;
        $user->update();
        $post->user->update();
        
        $output = '<div id="payment_success" class="success-overlay"><div class="content"><i class="fas fa-smile-wink"></i><h4>مرسی!</h4><p>براش فرستادیم!</p></div></div>';
            
        return $output;}
    }

    public function profile($id) {

        $user = User::where('id', $id)->first();
        return view('profile', ['user'=> $user]);
        // return view('profile', compact('user'));
                                    
    }

    public function userProfile($id) {

        $user = User::where('id', $id)->first();
        return view('userProfile', ['user'=> $user]);
        
                                    
    }
}