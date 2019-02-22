<?php
namespace app\index\controller;

use app\index\controller\Index;
use think\Controller;
use think\Db;

class Timing extends controller{

    //定时检查，发送充值信息
    public function CheckQTAddCardAmount(){
        $chongzhi = Db::name('qtaddcardamount')->where('IsSend=0')->field('CardsCode,Amount,AddDate')->select();
        // file_put_contents(ROOT_PATH .'/cztpl.txt', date('Y-m-d H:i:s')."\r\n\r\n".json_encode($chongzhi) ,FILE_APPEND);
        // dump($chongzhi);exit;
        $IndexObj = new Index();
        if($chongzhi){
            foreach ($chongzhi as $key => $value) {
                $IndexObj->cztpl($chongzhi[$key]);
            }
        }
        
    }
    //定时检查，发送消费信息
    public function CheckQTSaleorder(){
        $order=Db::name('qtsaleorder')
            ->alias('o')
            ->field('o.ShopNo,o.Amount,o.OrderNo,o.CardCode,o.OrderDate,o.RealAmount,s.ShopNAme')
            ->join('qtshop s','o.ShopNo = s.ShopNo')
            ->where('o.IsSend=0')
            ->select();
        // dump($order);

        $IndexObj = new Index();
        if($order){
            foreach ($order as $key => $value) {
                if(empty($value['CardCode'])){
                    Db::name('qtsaleorder')->where('OrderNo',$value['OrderNo'])->update(['IsSend'=>2]);
                }else{
                    $IndexObj->xftpl($order[$key]);
                }
                
            }
        }
        
    }

    
   
}
