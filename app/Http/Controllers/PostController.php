<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Image;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('front.master');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_name =" Administrateur";
        $data = Post::orderBy('id','DESC')->get();
        return view('front.master',compact('data','page_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'comment' => 'required',
        //     'name' => 'required',
        //     'photo'=> 'required',

        //    ],[
        //       'comment.required' => "Vous devez entrer un commentaire",
        //       'name.required' => "Vous devez entrer votre nom",
        //       'photo.required' => "Vous devez entrer une photo de vous"

        //    ]);
        //    $user = new User();
        //    $user->name = $request->name;
        //    $user->save();

           $post = new Post();
           $post->comment = $request->comment;
           $post->name = $request->name;

           $post->main_image = '';
           $post->thumb_image = '';
           $post->list_image = '';
        //    $post->photo = $request->photo;
           $post->save();
           $file = $request->file('img');
           $extension = $file->getClientOriginalExtension();
           $main_image = 'post_main_'.$post->id.'.'.$extension;

           $thumb_image = 'post_thumb_'.$post->id.'.'.$extension;
           $list_image = 'post_list_'.$post->id.'.'.$extension;
           Image::make($file)->resize(653,569)->save(public_path('/post/'.$main_image));
           Image::make($file)->resize(360,309)->save(public_path('/post/'.$list_image));
           Image::make($file)->resize(122,122)->save(public_path('/post/'.$thumb_image));
           $post->main_image = $main_image;
           $post->thumb_image = $thumb_image;
           $post->list_image =  $list_image;
           $post->save();

           return redirect()->action('PostController@create')->with('success','Post ajouté avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function display_post(){
        // $myPosts = Post::with(['comment','name'])->where('status',0)->get();
        // $posts = DB::table('posts')->select('comment','name','main_image')->where('status',1)->orderBy('id','DESC')->paginate(5);
        // dd($posts);

        // return view('Admin.admin')->with('myPosts',$myPosts);
        // return view('front.master', compact('posts'));

        $page_name =" Administrateur";
        $data = Post::orderBy('id','DESC')->get();
        return view('admin.master',compact('data','page_name'));
    }

    // public function listing(){
    //     $myPosts = Post::with(['comment','name','main_image'])->where('status',1)->orderBy('id','DESC')->paginate(5);
    //     return view('master',compact('myPosts'));

    //     }


}

