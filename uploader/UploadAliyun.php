<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-09-06
 * Time: 21:01
 */


namespace uploader;

use OSS\OssClient;

class UploadAliyun extends Upload{

    public $accessKey;
    public $secretKey;
    public $bucket;
    //即domain，域名
    public $endpoint;
    public $domain;
    public $directory;
    //config from config.php, using static because the parent class needs to use it.
    public static $config;
    //arguments from php client, the image absolute path
    public $argv;

    /**
     * Upload constructor.
     *
     * @param $params
     */
    public function __construct($params)
    {
	    $ServerConfig = $params['config']['storageTypes'][$params['uploadServer']];
	    
        $this->accessKey = $ServerConfig['accessKey'];
        $this->secretKey = $ServerConfig['accessSecret'];
        $this->bucket = $ServerConfig['bucket'];
        $this->endpoint = $ServerConfig['endpoint'];
	    $this->domain = $ServerConfig['domain'] ?? '';
	
	    if(!isset($ServerConfig['directory']) || ($ServerConfig['directory']=='' && $ServerConfig['directory']!==false)){
		    //如果没有设置，使用默认的按年/月/日方式使用目录
		    $this->directory = date('Y/m/d');
	    }else{
		    //设置了，则按设置的目录走
		    $this->directory = trim($ServerConfig['directory'], '/');
	    }
	
	    $this->argv = $params['argv'];
	    static::$config = $params['config'];
    }
	
	/**
	 * Upload images to Aliyun OSS(Object Storage Service)
	 * @param $key
	 * @param $uploadFilePath
	 *
	 * @return string
	 */
	public function upload($key, $uploadFilePath){
	    try {
	    	if($this->directory){
			    $key = $this->directory. '/' . $key;
		    }
		    $oss = new OssClient($this->accessKey, $this->secretKey, $this->endpoint);
		    $retArr = $oss->uploadFile($this->bucket, $key, $uploadFilePath);
		    if(!isset($retArr['info']['url'])){
			    throw new \Exception(var_export($retArr, true)."\n");
		    }
		    // http://bruce-markdown.oss-cn-shenzhen.aliyuncs.com
		    $defaultDomain = 'http://'.$this->bucket.'.'.$this->endpoint;
		    $link = $retArr['info']['url'];
		    if($this->domain){
			    $link = str_replace($defaultDomain, $this->domain, $link);
		    }
	    } catch (\Exception $e) {
		    //上传出错，记录错误日志(为了保证统一处理那里不出错，虽然报错，但这里还是返回对应格式)
		    $link = $e->getMessage();
		    $this->writeLog(date('Y-m-d H:i:s').'(Aliyun) => '.$e->getMessage(), 'error_log');
	    }
	    return $link;
    }
}