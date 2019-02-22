<?php
// 应用公共文件
use think\Config;
use Wechat\Loader;

/**
 * 获取微信操作对象
 * @staticvar array $wechat
 * @param type $type
 * @return WechatReceive
 */
function & load_wechat($type = '') {
    static $wechat = array();
    $index = md5(strtolower($type));
    if (!isset($wechat[$index])) {
        $config = Config::get('wechat');
        // dump($config);exit;
        $config['cachepath'] = CACHE_PATH . 'Data/';
        $wechat[$index] = Loader::get($type, $config);
    }
    return $wechat[$index];
}