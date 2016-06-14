<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$test = M('ts');
		$data = $test->select();
		echo "<pre>";
		print_r($data);
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
	public function autoLoad(){
		$this->display('index');
	}
	public function demo(){
		$t = M('ts');
		
		 //不要用ignore_user_abort()，因为默认即是客户端断开后程序自动终止    
        while (ob_get_level() > 0) {//为了确保所有的缓冲区关闭
            ob_end_flush();//输出缓冲区内容并关闭缓冲区 
        }
        ob_start();
        set_time_limit(0);
        header('Content-Type:text/event-stream');
       // Yii::$app->session->close();//关闭session，session现在用的是 memcache ，不关闭会导致memcache死锁
        while (true) {
			$number = 0;
			$orders = $t->where("id > 9")->select();
            if (!empty($orders)) {
                foreach ($orders as $o) {
                    $number ++;
                    $oids .= ',' . $o['id'];    
                }
                $url ="#";
                $links = "<a href='{$url}' target='_blank'>{$number}个新订单</a>";
                echo 'data:' . $links;
                echo "\n\n";
                ob_flush();
                flush();
            }
            $i = 0;//
            while ($i ++ < 3) {//60秒化成60个小循环，每次都输出便于PHP快速检测出与客户端的连接已经断开  此及与后台更新时间 3秒可改为60秒
                echo "empty";
                echo "\n\n";
                ob_flush();
                flush();
                sleep(1);
            }
        }
	}
}