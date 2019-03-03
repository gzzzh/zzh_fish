<?php
/**
 * Created by PhpStorm.
 * User: [一秋]
 * Date: 2018/3/29
 * Time: 11:23
 * Desc: 成功源于点滴
 */

namespace app\index\controller;

use think\Db;
use think\File;
use think\Validate;
use think\Image;
class Asset extends UserBaseController
{
    public function base64img(){

        $validate = new Validate([
            'base64img'=>'require'
        ]);
        $validate->message([
            'base64img.require'=>'请选择要上传的图片!'
        ]);

        $data = $this->request->param();
        if (!$validate->check($data)) {
            $this->error($validate->getError());
        }

        $user_id = $this->getUserId();
        $base64imag = $this->request->post('base64img');
        //转化base64img为图片 并返回路径

        $base64 = explode('###',$base64imag);
        $map = [];
        foreach ($base64 as $key=>$value){
            $imgPath = saveBase64Img($value);

            //图片存储到数据库中 返回图片id
            $image = Image::open('../upload/'.$imgPath);

            $file = new File('../upload/'.$imgPath);

            $data = [
                'user_id'=>$user_id,
                'file_size'=>$file->getSize(),
                'create_time'=>time(),
                'status'=>1,
                'file_path'=>$imgPath,
                'suffix'=>$image->type(),
                'filename'=>$file->getFilename()
            ];
            Db::name('asset')->insertGetId($data);

            $map[$key] = [
                'img_url'=>$imgPath,
                'full_img_url'=>img_host($imgPath),
            ];
        }

        $this->success('上传成功',$map);

    }


    /**
     * 获取文件路径
     */
    public function getFilePath(){

        $user_id = $this->getUserId();

        $map = [];
        $file = request()->file('file_path');
        // 移动到框架应用根目录/public/uploads/ 目录下
        if($file){
            $info = $file->move( ROOT_PATH . 'public' . DS . 'upload' . DS . 'img' );
            if($info){
                $imgPath = str_replace('\\','/','img/'.$info->getSaveName());

                $data = [
                    'user_id'=>$user_id,
                    'file_size'=>$info->getSize(),
                    'create_time'=>time(),
                    'status'=>1,
                    'file_path'=>$imgPath,
                    'suffix'=>$info->getExtension(),
                    'filename'=>$info->getFilename()
                ];
                Db::name('asset')->insertGetId($data);

                $map['img_url'] = $imgPath;
                $map['full_img_url'] = img_host($imgPath);
                $this->success('上传成功',$map);
            }else{
                // 上传失败获取错误信息
                $this->error($file->getError());
            }
        }else{
            $this->error('未接收到文件');
        }

    }
}