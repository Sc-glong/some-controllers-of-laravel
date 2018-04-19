<?php

namespace App\Http\Controllers;

use App\Model\Post;
use Illuminate\Http\Request;
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
        //session处理
        //(1)从request对象中获得session信息
        //(2)直接使用session（）辅助函数
       // session('logineduser','test');
        //设置session数据 ，需要给session（）传入一个数组参数
        session([
            'logineduser'=> 'test'
        ]);



//        //分页码的实现
//        $result=\Illuminate\Support\Facades\DB::table('post')->paginate(10);
//        return view('post.index',[
//            'results'=>$result
//    ]);




        //使用eloquent orm获取数据
        //1,静态形式
//        $result=Post::all();//获取所有记录
//        $result=Post::paginate(10);//分页查询
//        $result=Post::where('id','<',10)->get();//条件查询，where()返回查询构造器需要使用get方法
//        $result=Post::find([1,3,5]);//查询指定主键记录
//        $row=Post::find(3);//获取单条记录
        //2.对象形式





        //获取所有记录
        //得到的是一个collection对象
//        $result=DB::table('posts')->get();
        //dd($result);
        //toarrary()转化为数组形式
//        $arr=$result->toarray();
//        //fist()获取第一条记录
//        $first=$result->first();


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //获取session数据
        $user=session('logineduser');
        dd($user);


        //查找指定id的记录
//        $row=DB::table('posts')->where('id')->first();
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
}
