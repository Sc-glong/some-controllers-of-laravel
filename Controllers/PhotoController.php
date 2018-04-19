<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //IOC容器
        //ioc容器在程序启动时，加载了一系列服务提供者，在程序的执行过程中，可以任意获取服务提供者；
        $app=app();
        //dd($app);
        //获取服务提供者对象：app('参数')
        //application::get();
        //application::make();
        $view=app('view');
       // dd($view);
        //facades门面类获取视图对象
//        $v=View::make();


        //向视图文件中传递数据
        //tp5:$this->assign('name','aa');
        return  view('photos.index',[
            'title' => 'laravel test',
            'users'=>[
                [
                    'name'=>'zhangdan',
                    'age'=>18,
                ],
                [
                    'name'=>'xiaoming',
                    'age'=>28,
                ]
            ]
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dump()；输出变量的详细信息
        //dd();输出变量的详细信息并结束程序执行
//        dd(view());
        //view(参数);表示创建一个视图对象，参数表明待加载的视图文件
        //tp5:return $this->fetch('create);
        //view()加载的视图文件默认位于  /resource/views
        return view('photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return  ;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'edit';
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
        return 'put方式修改数据库中单条记录';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'delete请求删除单条记录';
    }
}
