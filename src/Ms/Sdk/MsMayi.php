<?php

namespace Health\Ant\Ms\Sdk;

use Health\Ant\Mayi\AopClient;
use Health\Ant\Mayi\Request\AlipayInsSceneInsserviceprodSerattachmentUploadRequest;

class MsMayi
{
    //文件上传
    public static function upload()
    {
        $aop = new AopClient ();
        $aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
        $aop->appId = 'your app_id';
        $aop->rsaPrivateKey = '请填写开发者私钥去头去尾去回车，一行字符串';
        $aop->alipayrsaPublicKey='请填写支付宝公钥，一行字符串';
        $aop->apiVersion = '1.0';
        $aop->signType = 'RSA2';
        $aop->postCharset='GBK';
        $aop->format='json';
        $request = new AlipayInsSceneInsserviceprodSerattachmentUploadRequest();
        $request->setSerBizType("参考com.alipay.insserviceprod.enums.progress.InsSerBizTypeEnum。ISSUE：服务出单、APPLY：服务申请、USE：服务使用、WRITE_OFF：服务核销");
        $request->setSerBizNo("20190410009010020000000000000210000008140");
        $request->setUploadTime("2018-09-14 14:28:37");
        $request->setFileName("2088的处方");
        $request->setFileType("参考com.alipay.insserviceprod.enums.attachment.InsSerAttachmentTypeEnum。IMAGE：图像、VIDEO：视频、TEXT：文本");
        $request->setFileBizCode("FIRST_OUTPATIENT_RECORD：首次就诊病历 等，需要增值服务中台对应开发同学给出");
        $request->setFileDesc("XXX的电子处方PDF");
        $request->setFileSize("0");
        $request->setFilePath("/download/service/attachment/20200409009010100000000000000000000000201/APUn8T4iqc6wAAAAAAAAAAABkDVl1AA");
        $request->setBizData("{\"user_id\":\"1234\",\"phone\":\"18267190001\",\"address\":\"浙江省杭州市西湖区黄龙时代广场XX\"}");
        $request->setOutBizNo("20181225002050020001000100000001");
        $request->setFileContent("@"."本地文件路径");
        $result = $aop->execute ( $request);

        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        $resultCode = $result->$responseNode->code;
        if(!empty($resultCode)&&$resultCode == 10000){
            echo "成功";
        } else {
            echo "失败";
        }
    }

    //test
    public static function test()
    {
        echo 123;
    }
}