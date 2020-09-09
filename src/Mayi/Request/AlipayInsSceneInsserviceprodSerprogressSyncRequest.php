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
    public $ser_biz_no;

    /**
     * 服务业务类型
     */
    public $ser_biz_type;

    /**
     * 具体需要同步的进度
     */
    public $status;


    /**
     * 进度变更时间
     */
    public $change_time;

    /**
     * 服务商的服务进度变更流⽔号
     * 唯⼀标识当前服务进度
     */
    public $out_biz_no;


    /**
     * ⽀付宝的服务产品编号
     */
    public $ant_ser_prod_no;


    /**
     * 扩展字段
     */
    public $biz_data;


}
