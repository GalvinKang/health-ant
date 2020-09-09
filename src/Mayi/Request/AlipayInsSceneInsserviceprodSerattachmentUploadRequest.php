<?php
namespace Health\Ant\Mayi\Request;

class AlipayInsSceneInsserviceprodSerattachmentUploadRequest
{

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
        return "alipay.ins.scene.insserviceprod.serattachment.upload";
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



    public $biz_data;

	/**
     * 文件业务码(业务方自定义)
     */
    public $file_biz_code;

    /**
     * 文件二进制字节流
     **/
    public $file_content;

	/**
     * 文件描述
     */
    public $file_desc;

	/**
     * 文件名称
     */
    public $file_name;

	/**
     * 文件路径
     */
    public $file_path;

	/**
     * 文件大小，对应java里面File的length
     */
    public $file_size;

	/**
     * 文件类型
     */
    public $file_type;

	/**
     * 外部业务号
     */
    public $out_biz_no;

	/**
     * 业务单据号
     */
    public $ser_biz_no;

	/**
     * 服务业务类型
     */
    public $ser_biz_type;

	/**
     * 上传时间
     */
    public $upload_time;


}