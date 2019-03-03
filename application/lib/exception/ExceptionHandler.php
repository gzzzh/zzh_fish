<?php
namespace app\lib\exception;
use think\exception\Handle;
use think\Log;
use think\Request;

class ExceptionHandler extends Handle {
	private $code;
	private $msg;
	// 需要返回客户端当前请求的URL
	public function render(\Exception $e) {
		if ($e instanceof BaseException) {
			// 如果是自定义异常
            $this->code = $e->code;
            $this->msg = $e->msg;
		} else {
			if (config ( 'app_debug' )) {
				return parent::render ( $e );
			} else {
				$this->code = 500;
				$this->msg = '服务器异常！';
				$this->recordErrorLog ( $e );
                Log::error(request()->url ());
			}
		}
		$result = [ 
				'code' => $this->code ,
				'msg' => $this->msg
		];


		return json ( $result );
	}

	// 记录异常日志
	private function recordErrorLog(\Exception $e) {
		Log::init ( [ 
				'type' => 'File',
				'path' => LOG_PATH,
				'level' => [ 
						'error' 
				] 
		] );
		Log::record ( $e->getMessage (), 'error' );
	}


}