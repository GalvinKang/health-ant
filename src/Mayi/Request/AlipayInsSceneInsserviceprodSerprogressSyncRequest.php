<?php
namespace Health\Ant\Mayi\Request;

class AlipayInsSceneInsserviceprodSerprogressSyncRequest
{
    //增值服务进度同步接口
    private $bizContent;
    private $apiParas = array();
    private $terminalType;
    private $terminalInfo;
    private $prodCode;
    private $apiVersion="1.0";
    private $notifyUrl;
    private $returnUrl;
    private $needEncrypt=false;


    public function setBizContent($bizContent)
    {
        $this->bizContent = $bizContent;
        $this->apiParas["biz_content"] = $bizContent;
    }

    public function getBizContent()
    {
        return $this->bizContent;
    }

    public function getApiMethodName()
    {
        return "alipay.ins.scene.insserviceprod.serprogress.sync";
    }

    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl=$notifyUrl;
    }

    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl=$returnUrl;
    }

    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    public function getApiParas()
    {
        return $this->apiParas;
    }

    public function getTerminalType()
    {
        return $this->terminalType;
    }

    public function setTerminalType($terminalType)
    {
        $this->terminalType = $terminalType;
    }

    public function getTerminalInfo()
    {
        return $this->terminalInfo;
    }

    public function setTerminalInfo($terminalInfo)
    {
        $this->terminalInfo = $terminalInfo;
    }

    public function getProdCode()
    {
        return $this->prodCode;
    }

    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
    }

    public function setApiVersion($apiVersion)
    {
        $this->apiVersion=$apiVersion;
    }

    public function getApiVersion()
    {
        return $this->apiVersion;
    }

    public function setNeedEncrypt($needEncrypt)
    {

        $this->needEncrypt=$needEncrypt;

    }

    public function getNeedEncrypt()
    {
        return $this->needEncrypt;
    }


    /**
     * ⽀付宝的服务记录编号
    */
    private $serBizNo;

    /**
     * 服务业务类型
     */
    private $serBizType;

    /**
     * 具体需要同步的进度
     */
    private $status;


    /**
     * 进度变更时间
     */
    private $changeTime;

    /**
     * 服务商的服务进度变更流⽔号
     * 唯⼀标识当前服务进度
     */
    private $outBizNo;


    /**
     * ⽀付宝的服务产品编号
     */
    private $antSerProdNo;


    /**
     * 扩展字段
     */
    private $bizData;


    public function setSerBizNo($serBizNo)
    {
        $this->serBizNo = $serBizNo;
    }

    public function getSerBizNo()
    {
        return $this->serBizNo;
    }

    public function setSerBizType($serBizType)
    {
        $this->serBizType = $serBizType;
    }

    public function getSerBizType()
    {
        return $this->serBizType;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }


    public function setChangeTime($changeTime)
    {
        $this->changeTime = $changeTime;
    }

    public function getChangeTime()
    {
        return $this->changeTime;
    }


    public function setOutBizNo($outBizNo)
    {
        $this->outBizNo = $outBizNo;
    }

    public function getOutBizNo()
    {
        return $this->outBizNo;
    }


    public function setAntSerProdNo($antSerProdNo)
    {
        $this->antSerProdNo = $antSerProdNo;
    }

    public function getAntSerProdNo()
    {
        return $this->antSerProdNo;
    }


    public function setBizData($bizData)
    {
        $this->bizData = $bizData;
    }

    public function getBizData()
    {
        return $this->bizData;
    }

    public function putOtherTextParam($key, $value) {
        $this->apiParas[$key] = $value;
        $this->$key = $value;
    }

}
