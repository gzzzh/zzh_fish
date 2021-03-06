<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/12/27
 * Time: 20:08
 */

namespace app\admin\controller;

use think\Request;
class Category extends Admin
{
    public function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
    }

    /**
     * 活动分类
     */
    public function index()
    {
        $cModel = new \app\admin\model\Category;
        $list = $cModel->getLists();

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
            $cModel = new \app\admin\model\Category;
            $info = $cModel->getCateInfo($id);
            if(empty($info)){
                $this->error('找不到对应的数据');
            }

            $this->assign('id', $id);
            $this->assign('info', $info);
        }

        return view('add');
    }


    /**
     * 保存分类
     */
    public function save()
    {
        $data = Request::instance()->param();
        $data['image'] = request()->file('image');

        //数据监测
        $validate = new \app\admin\validate\category;
        if (!$validate->scene('checkCate')->check($data))
        {
            $this->error($validate->getError());
        }

        //图片存在，就上传
        if(!empty($data['image'])){
            //开始上传图片
            $accInfo = $data['image']->move(ROOT_PATH . 'public' . DS . 'upload'. DS.'category');
            if($accInfo){
                // 成功上传后 获取上传信息
                $data['image'] = '/upload/category/'.$accInfo->getSaveName();
            }else{
                // 上传失败获取错误信息
                $this->error($data['image']->getError());
                return;
            }
        }

        if(!empty($data['id']))
        {
            if(empty($data['image'])){
                unset($data['image']);
            }

            //开始修改
            $cModel = new \app\admin\model\Category;
            $data['update'] = date('Y-m-d H:i:s');//更新时间

           // echo '<pre>';
            //var_dump($data);return;
            $res = $cModel->saveCategory($data);
            if($res === false){
                $this->error('修改失败，系统错误');
            }
        }else{
            //添加
            $cModel = new \app\admin\model\Category;
            empty($data['image']) && $this->error('添加失败，请上传图片');
            if(empty($data['sort'])){
                $maxSort = $cModel->getCateMax();
                $data['sort'] = $maxSort + 1;
            }
            $res = $cModel->addCate($data);
            if(empty($res)){
                $this->error('添加失败，系统错误');
            }
        }
        $this->redirect('category/index','',1,'ok');
    }


    /**
     * 删除
     */
    public function del()
    {
        $id = Request::instance()->param('id');
        if(empty($id)){
            $this->error('非法的参数');
        }

        //开始删除
        $cModel = new \app\admin\model\Category;
        $res = $cModel->delCateRes($id);
        if(empty($res)){
            $this->error('删除失败，系统错误');
        }

        $this->redirect('category/index','',1,'ok');
    }

}