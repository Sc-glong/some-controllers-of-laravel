<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $r)
    {
       // dd($r);
        return view('user.index',[
            'users'=>[
                ['id'=>1 ,'name'=>'张三'],
                ['id'=>2 ,'name'=>'李四'],
                ['id'=>3 ,'name'=>'王五'],
                ['id'=>4 ,'name'=>'赵六']
            ]
        ]);
        //return View::make()
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Response $response)
    {
       // return view('user.create');
        //直接使用依赖注入的response对象
        //
        $response->setContent(view('user.create'));
        return $response;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取所有请求数据
        //dd($request->all());
        $name=$request->input('username');
        //插入数据库中
        //善后处理
        //数据插入成功，跳转至首页
        return redirect()->to('/users');
        //s数据插入失败回退到 上一页面
       // return back();
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
        //先获取指定id的资源内容
        //$user=db()->get();
        //显示视图
        return view('user.edit',[
            'user'
        ]);
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
