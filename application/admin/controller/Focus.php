<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2019/1/16
 * Time: 21:45
 */

namespace app\admin\controller;

use think\Request;
use think\Db;
class Focus extends Admin
{
    public function _initialize(){
        parent::_initialize();
    }

    /**
     * 轮播图列表
     */
    public function index()
    {
        $fModel = new \app\admin\model\Focus;
        $list = $fModel->getFocusList();

        $this->assign('list', $list);
        return view('index');
    }

    /**
     * 添加或编辑
     */
    public function add()
    {
        $id = Request::instance()->param('id');
        if(!empty($id)){
            $fModel = new \app\admin\model\Focus;
            $info = $fModel->getFocusInfos($id);
            if(empty($info)){
                $this->error('找不到对应的数据');
            }

            $this->assign('id', $id);
            $this->assign('info', $info);
        }

        return view('add');
    }


    /**
     * 保存轮播信息
     */
    public function save()
    {
        $data = Request::instance()->param();
        $data['images'] = request()->file('images');

        //修改
        $validate = new \app\admin\validate\focus;
        if (!$validate->scene('checkFocus')->check($data))
        {
            $this->error($validate->getError());
        }

        //图片存在，就上传
        if(!empty($data['images'])){
            //开始上传图片
            $accInfo = $data['images']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'focus');
            if($accInfo){
                // 成功上传后 获取上传信息
                $data['images'] = 'upload/focus/'.$accInfo->getSaveName();
            }else{
                // 上传失败获取错误信息
                $this->error($data['images']->getError());
                return;
            }
        }

        //添加或修改
        $fModel = new \app\admin\model\Focus;
        if(!empty($data['id']))
        {
            if(empty($data['images'])){
                unset($data['images']);
            }

            //开始修改
            $res = $fModel->saveFocus($data);
            if($res === false){
                $this->error('修改失败，系统错误');
            }
        }else{
            //添加
            empty($data['images']) && $this->error('添加失败，请上传图片');
            if(empty($data['sort'])){
                $maxSort = $fModel->getFocusSortMax();
                $data['sort'] = $maxSort + 1;
            }
            $res = $fModel->insertGetId($data);
            if(empty($res)){
                $this->error('添加失败，系统错误');
            }
        }
        $this->redirect('focus/index','',1,'ok');
    }

    /**
     * 删除
     */
    public function del()
    {
        $id = Request::instance()->param('id');
        if(empty($id)){
            $this->error('非法请求');
        }

        $fModel = new \app\admin\model\Focus;
        $info = $fModel->getFocusInfos($id);
        if(empty($info)){
            $this->error('不存在的数据，请重试');
        }

        //开始删除
        $res = $fModel->delFocusRes($id);
        if(empty($res)){
            $this->error('删除失败，系统错误');
            return;
        }

        $this->redirect('focus/index','',1,'ok');
    }
}