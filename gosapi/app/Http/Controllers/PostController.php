<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Home;
use App\BlogArea;
use App\BreadCrumbArea;
class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with(['breadcrumbarea','blogarea','homess'])->paginate(5);
        return view('post.posts')->withPosts($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        return view('post.post')->withPost($post);
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
        'post_image' =>'required',
        'content_one' =>'required',
        'blog_image' =>'required',
        'content_two' =>'required',
        'content_three' =>'required',
        'title_two' =>'required',
        'content_four' =>'required',
        'blog_image_two' =>'required',
        'title_three' =>'required',
        'title_five' => 'required',
        'content_five' =>'required',
        'title_four' =>'required',
        'list_one' =>'required',
        'list_two' =>'required',
        'list_three' =>'required',
        'list_four' =>'required',
        'list_five' =>'required',
        'list_six' =>'required',
        'list_seven' =>'required',
        'list_eight' =>'required',
        'list_nine' =>'required',
        'content_six' =>'required',
        'blog_video' =>'required',
        'blog_image_three' =>'required',
        'content_seven' =>'required',
        ]);

        
        $post = Post::find($request->input('id'));
        
        if($request->has('post_image')) {
            $image = $request->file('post_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->post_image = $request->file('post_image')->getClientOriginalName();
         }

         if($request->has('blog_image')) {
            $image = $request->file('blog_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->blog_image = $request->file('blog_image')->getClientOriginalName();
         }

         if($request->has('blog_image_two')) {
            $image = $request->file('blog_image_two');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->blog_image_two = $request->file('blog_image_two')->getClientOriginalName();
         }

         if($request->has('blog_image_three')) {
            $image = $request->file('blog_image_three');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->blog_image_three = $request->file('blog_image_three')->getClientOriginalName();
         }

        $post->name = $request->get('name');
        $post->content_one = $request->get('content_one');
        $post->content_two = $request->get('content_two');
        $post->title = $request->get('title');
        $post->title_two = $request->get('title_two');
        $post->title_three = $request->get('title_three');
        $post->title_four = $request->get('title_four');
        $post->title_five = $request->get('title_five');
        $post->content_three = $request->get('content_three');
        $post->content_four = $request->get('content_four');
        $post->content_five = $request->get('content_five');
        $post->list_one = $request->get('list_one');
        $post->list_two = $request->get('list_two');
        $post->list_three = $request->get('list_three');
        $post->list_four = $request->get('list_four');
        $post->list_five = $request->get('list_five');
        $post->list_six = $request->get('list_six');
        $post->list_seven = $request->get('list_seven');
        $post->list_eight = $request->get('list_eight');
        $post->list_nine = $request->get('list_nine');
        $post->title_five = $request->get('title_five');
        $post->content_six = $request->get('content_six');
        $post->blog_video = $request->get('blog_video');
        $post->content_seven = $request->get('content_seven');
        
        
        $post->save();
        
       

        return redirect('/posts')->with('success', 'Post  updated!');
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $homes = Home::all();
        $blogareas = BlogArea::all();
        $breadcrumbareas = BreadCrumbArea::all();
        return view('post.create')->with([
         'homes'  => $homes,
         'blogareas' => $blogareas,
         'breadcrumbareas' => $breadcrumbareas

        ]);
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'title' =>'required',
        'post_image' =>'required',
        'content_one' =>'required',
        'blog_image' =>'required',
        'content_two' =>'required',
        'content_three' =>'required',
        'title_two' =>'required',
        'content_four' =>'required',
        'blog_image_two' =>'required',
        'title_three' =>'required',
        'title_five' => 'required',
        'content_five' =>'required',
        'title_four' =>'required',
        'list_one' =>'required',
        'list_two' =>'required',
        'list_three' =>'required',
        'list_four' =>'required',
        'list_five' =>'required',
        'list_six' =>'required',
        'list_seven' =>'required',
        'list_eight' =>'required',
        'list_nine' =>'required',
        'content_six' =>'required',
        'blog_video' =>'required',
        'blog_image_three' =>'required',
        'content_seven' =>'required',
        'home_content'  => 'required',
        'blogarea_content' => 'required',
        'breadcrumbarea_content' => 'required'
        ]);

        
        $post = new Post();
        
        if($request->has('post_image')) {
            $image = $request->file('post_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->post_image = $request->file('post_image')->getClientOriginalName();
         }

         if($request->has('blog_image')) {
            $image = $request->file('blog_image');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->blog_image = $request->file('blog_image')->getClientOriginalName();
         }

         if($request->has('blog_image_two')) {
            $image = $request->file('blog_image_two');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->blog_image_two = $request->file('blog_image_two')->getClientOriginalName();
         }

         if($request->has('blog_image_three')) {
            $image = $request->file('blog_image_three');
              
             $filename = $image->getClientOriginalName();
             $image->move(public_path('images/Post'), $filename);
             $post->blog_image_three = $request->file('blog_image_three')->getClientOriginalName();
         }

        $post->name = $request->get('name');
        $post->content_one = $request->get('content_one');
        $post->content_two = $request->get('content_two');
        $post->title = $request->get('title');
        $post->title_two = $request->get('title_two');
        $post->title_three = $request->get('title_three');
        $post->title_four = $request->get('title_four');
        $post->title_five = $request->get('title_five');
        $post->content_three = $request->get('content_three');
        $post->content_four = $request->get('content_four');
        $post->content_five = $request->get('content_five');
        $post->list_one = $request->get('list_one');
        $post->list_two = $request->get('list_two');
        $post->list_three = $request->get('list_three');
        $post->list_four = $request->get('list_four');
        $post->list_five = $request->get('list_five');
        $post->list_six = $request->get('list_six');
        $post->list_seven = $request->get('list_seven');
        $post->list_eight = $request->get('list_eight');
        $post->list_nine = $request->get('list_nine');
        $post->title_five = $request->get('title_five');
        $post->content_six = $request->get('content_six');
        $post->blog_video = $request->get('blog_video');
        $post->content_seven = $request->get('content_seven');
        $post->home_id = $request->get('home_content');
        $post->blog_area_id = $request->get('blogarea_content');
        $post->breadcrumbarea_id = $request->get('breadcrumbarea_content');
        
        
        $post->save();
        
       

        return redirect('/posts')->with('success', 'Post  created!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
  
        return redirect()->route('post.posts')
                        ->with('success','Post deleted successfully');
    }
}
