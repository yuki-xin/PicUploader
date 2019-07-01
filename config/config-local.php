<?php
/**
 * Created by PhpStorm.
 * User: bruce
 * Date: 2018-08-30
 * Time: 14:58
 */

$config = [
	'storageTypes' => [
		//Qiniu Cloud
		'qiniu' => [
			'name' => '七牛云',
			//七牛云AppKey
			'AK' => getenv('QINIU_AK')?:'ASG********************************0AoF',
			//七牛云AppSecret
			'SK' => getenv('QINIU_SK')?:'Uo*********************************lkEy',
			//七牛云对象存储空间名
			'bucket' => getenv('QINIU_BUCKET')?:'markdown',
			//七牛云外链域名（域名要自己绑定，否则默认域名会过期）
			'domain' => getenv('QINIU_DOMAIN')?:'http://pe5scgdex.bkt.clouddn.com',
			//七牛优化参数，直接加在链接后面，但是不会优化原图，只会优化输出的图片，如果不需要可以不配置该项（即注释掉）
			// 'optimize' => getenv('QINIU_OPTIMIZE')?:'?imageMogr2/thumbnail/800x/strip/quality/80',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//Tencent Cloud
		'tencent' => [
			'name' => '腾讯云',
			'appId' => getenv('TECENT_AID')?:'1*******0',
			'secretId' => getenv('TECENT_SID')?:'AKID*********************************ut33',
			'secretKey' => getenv('TECENT_SKEY')?:'zlK*********************************tjLn2',
			'bucket' => getenv('TECENT_BUCKET')?:'markdown-*******',
			'region' => getenv('TECENT_REGION')?:'ap-guangzhou',
			//如果不填domain，则自动拼接腾讯给的域名
			'domain' => getenv('TECENT_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//Netease Cloud
		'netease' => [
			'name' => '网易云',
			'accessKey' => getenv('NETEASE_AK')?:'4bd5*********************************7b',
			'accessSecret' => getenv('NETEASE_AS')?:'465*****************************82db',
			'bucket' => getenv('NETEASE_BUCKET')?:'markdown-bucket',
			//endPoint不是域名，域名是 bucket.'.'.endPoint
			'endPoint' => getenv('NETEASE_ENDPOINT')?:'nos-eastchina1.126.net',
			//如果不填domain，则自动拼装网易云给的域名
			'domain' => getenv('NETEASE_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//baidu Cloud
		'baidu' => [
			'name' => '百度云',
			'accessKeyId' => getenv('BAIDU_AK')?:'4fdda********************b5',
			'secretAccessKey' => getenv('BAIDU_SK')?:'ddd6****************3a3',
			'endpoint' => getenv('BAIDU_ENDPOINT')?:'http://gz.bcebos.com',
			'bucket' => getenv('BAIDU_BUCKET')?:'markdown',
			//如果不写，则自动拼装百度给的域名
			'domain' => getenv('BAIDU_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],
		//JDCloud
		'jd' => [
			'name' => '京东云',
			'AccessKeyId' => getenv('JD_KEY')?:'050***********************B',
			'AccessKeySecret' => getenv('JD_SECRET')?:'E1C******************8A6F',
			'endpoint' => getenv('JD_ENDPOINT')?:'https://s3.cn-south-1.jcloudcs.com',
			'region' => getenv('JD_REGION')?:'cn-south-1',
			'bucket' => getenv('JD_BUCKET')?:'markdown',
			//如果不写，则自动拼装京东给的域名
			'domain' => getenv('JD_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],
		//Aliyun Cloud
		'aliyun' => [
			'name' => '阿里云',
			'accessKey' => getenv('ALIYUN_AK')?:'cD********aL',
			'accessSecret' => getenv('ALIYUN_AS')?:'dN***************V4h2',
			'bucket' => getenv('ALIYUN_BUCKET')?:'bruce-markdown',
			'endpoint' => getenv('ALIYUN_ENDPOINT')?:'oss-cn-shenzhen.aliyuncs.com',
			//如果不写，则自动拼装阿里云给的域名
			'domain' => getenv('ALIYUN_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//Upyun Cloud
		'upyun' => [
			'name' => '又拍云',
			'serviceName' => getenv('UPYUN_SN')?:'bl******wn',
			'operator' => getenv('UPYUN_OPERATOR')?:'*******',
			'password' => getenv('UPYUN_PASSWORD')?:'**************',
			//如果不写，则自动拼装又拍云给的域名
			'domain' => getenv('UPYUN_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//https://sm.ms
		'smms' => [
			'name' => 'sm.ms',
			//代理地址，如果使用shadowsocks做代理，ip填127.0.0.1即可，端口从『偏好设置→HTTP→监听端口』找
			//留空或注释掉表示不使用代理
			// 'proxy' => getenv('SMMS_PROXY')?:'http://127.0.0.1:1087',
		],

		//imgur
		'imgur' => [
			'name' => 'Imgur',
			'clientId' => getenv('IMGUR_CI')?:'ab************cdf',
			//代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
			//端口从『偏好设置→HTTP→监听端口』找，留空或注释掉表示不使用代理
			// 'proxy' =>  getenv('IMGUR_PROXY')?:'http://127.0.0.1:1087',
		],

		//Ucloud
		'ucloud' => [
			'name' => 'UCloud',
			'publicKey' => getenv('UCLOUD_PUBLIC_KEY')?:'Rgv************************************************************3M=',
			'privateKey' => getenv('UCLOUD_PRIVATE_KEY')?:'Jt4************************************************************8qGH',
			//markdown-blog.cn-gd.ufileos.com
			'proxySuffix' => getenv('UCLOUD_PROXY_SUFFIX')?:'.cn-**.ufileos.com',
			'bucket' => getenv('UCLOUD_BUCKET')?:'mar******log',
			//endPoint，cdn加速域名是bucket名+endPoint组成，Ucloud中没有endPoint的说法，
			//但其实这就是endPoint，这个值请自己复制cdn加速域名除去bucket名部分到这里（不包含英文句点）
			'endPoint' => getenv('UCLOUD_ENDPOINT')?:'ufile.ucloud.com.cn',
			//如果不写，则自动拼装又拍云给的域名
			'domain' => getenv('UCLOUD_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//QingCloud
		'qingcloud' => [
			'name' => '青云',
			'accessKeyId' => getenv('QINGCLOUD_AK')?:'TIJ************ADM',
			'secretAccessKey' => getenv('QINGCLOUD_SK')?:'hvF************************************Awe0x',
			'bucket' => getenv('QINGCLOUD_BUCKET')?:'bl******down',
			'zone' => getenv('QINGCLOUD_ZONE')?:'***',
			//如果不写，则自动拼装又拍云给的域名
			'domain' => getenv('QINGCLOUD_DOMAIN')?:'',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//NextCloud 有一个别人搭建的nextcloud网盘：https://nextcloud-fi.webo.hosting，不过很慢
		//Nextcloud一般都是自己搭建
		'nextcloud' => [
			'name' => 'Nextcloud',
			//固定写“nextcloud”
			'type' => 'nextcloud',
			//设置为你的nextcloud右下角，点击“设置”后显示的那个WebDAV地址，
			//但是去掉“/remote.php/webdav/”，即只保留域名部分
			'baseUri' => getenv('NEXTCLOUD_URI')?:'https://nextcloud-fi.webo.hosting',
			'username' => getenv('NEXTCLOUD_USERNAME')?:'zhangsam@hotmail.com',
			'password' => getenv('NEXTCLOUD_PASSWORD')?:'xi***********MD',
			//代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
			//比如：'proxy' => 'http://127.0.0.1:1087'，端口从『偏好设置→HTTP→监听端口』找，留空表示不使用代理
			// 'proxy' => '',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
		],

		//Github
		'github' => [
			'name' => 'Github',
			//github仓库(github左上角的名字，带用户名)
			'repo' => getenv('GITHUB_REPO')?:'xiebruce/PicUploader',
			//分支，默认为master
			'branch' => getenv('GITHUB_BRANCH')?:'master',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
			//提交的评论信息，保持默认即可，当然你想修改成你想要的也可以
			'message' => 'Upload from PicUploader',
			//access_token，授权token
			'access_token' => getenv('GITHUB_TOKEN')?:'c506a9de*********************d375de5e',
			//不填则使用github默认的域名，填了则使用填的域名(但填的域名要自行做nginx反向代理到真实域名地址)
			'domain' => getenv('GITHUB_DOMAIN')?:'',
			//代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
			//比如：'proxy' => 'http://127.0.0.1:1087'，端口从『偏好设置→HTTP→监听端口』找，留空表示不使用代理
			'proxy' => '',
		],

		//Gitee
		'gitee' => [
			'name' => '码云',
			//gittee仓库(gittee左上角的名字，带用户名)
			'repo' => getenv('GITEE_REPO')?:'xiebruce/imagebed',
			//分支，默认为master
			'branch' => getenv('GITEE_BRANCH')?:'master',
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
			//提交的评论信息，可以不填
			'message' => 'Upload from PicUploader',
			//access_token，授权token
			'access_token' => getenv('GITEE_TOKEN')?:'0e6bb6**************d9a5f2',
			//不填则使用gittee默认的域名，填了则使用填的域名
			'domain' => getenv('GITEE_DOMAIN')?:'',
			//代理地址，如果使用shadowsocks做代理，ip填http://127.0.0.1（或直接填127.0.0.1）即可，
			//端口从『偏好设置→HTTP→监听端口』找，留空或注释掉表示不使用代理
			// 'proxy' => 'http://127.0.0.1:1087',
			// 'directory' => date('Y/m/d/'),
			//自定义目录格式：Photos/2019/03/31
			// 'directory' => 'Photos/' . date('Y/m/d/'),
			//自定义目录格式：Photos/Travel/2019/03/31
			// 'directory' => 'Photos/Travel/' . date('Y/m/d/'),
			//自定义目录格式：Photos/Travel/Maldives
			// 'directory' => 'Photos/Travel/Maldives',
		],

		//Weibo(上传图片到微博并不会自动发一条微博，请放心使用)
		'weibo' => [
			'name' => '微博',
			//微博登录用户名(或邮箱)
			'username' => getenv('WEIBO_USERNAME')?:'zhangsan@sina.com',
			//微博登录密码
			'password' => getenv('WEIBO_PASSWORD')?:'*****************',
		],

		//使用sftp协议上传到自己的服务器上
		'bwg' => [
			'name' => '搬瓦工',
			//固定填写sftp
			'type' => 'sftp',
			//ip也可以写域名(反正域名最终也是被解析为ip，都一样)
			'host' => getenv('SFTP_HOST')?:'服务器ip或域名',
			'username' => getenv('SFTP_USERNAME')?:'ssh用户名',
			'password' => getenv('SFTP_PASSWORD')?:'ssh密码',
			//prefix为前缀，最终上传目录是：prefix+directory，那为什么要分开写呢？因为directory会拼到你的domain后面，而prefix不会
			//prefix就相当于设置上传的“根目录”
			'prefix' =>  getenv('SFTP_PREFIX')?:'/home/xiebruce',
			//如果指定了directory，则directory指定的目录必须存在，否则不会自动创建，会报错
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
			'domain' => 'https://img.xiebruce.top',
		],

		//上传到PicUploader所在服务器本地(适用于把PicUploader部署到远程服务器上的用户)
		'local' => [
			'name' => '本地服务器',
			//prefix为前缀，最终上传目录是：prefix+directory，那为什么要分开写呢？因为directory会拼到你的domain后面，而prefix不会
			//prefix就相当于设置上传的“根目录”
			'prefix' => getenv('LOCAL_PREFIX')?:'/data/wwwroot',
			//directory指定的目录不存在会自动创建(但必须php-fpm对prefix指定的目录具有写权限)
			//按本例的配置，文件最终将被上传到：/home/xiebruce/data/images 目录下(即prefix+directory)
			//可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			//存储目录，可使用年月日点位符，如 {Y}/{m}/{d}，真正被解析出来的时候会被替换成当前的年月日(如 2019/05/10)
			//{Y}表示当前的年(注意Y是大写)，{m}表示当前月(有前导0，即1-9月会显示成01-09)，{d}会被替换为当前日期，有前导0(即1-9日会替换为01-09)
			'directory' => getenv('DIRECTORY')?:'',
			'domain' => getenv('LOCAL_DOMAIN')?:'https://img.xiebruce.top',
		],
	],

	// 即将舍弃，图片优化宽度（建议填1000），值为0或注释掉表示不优化，由于比较大的图片压缩为固定宽度容易导致图片很模糊，因此这种压缩为固定宽度的方式不科学，改为使用百分比，如果使用了“resizeOption”选项，该参数不再使用。
	'imgWidth' => 1000,

	// 调整图片大小，以下widthGreaterThan、heightGreaterThan、sizeBiggerThan三个条件，只要有一个满足，图片即会按percentage指定的百分比压缩（只对jpg和png有效，gif暂时无法压缩）
	'resizeOptions' => [
		// 0.65表示把原图等比缩小为原来的65%，percentage取值为0-100之间，可使用两位小数，当percentage为0和100时，不进行压缩。
		'percentage' => '65',

		// 当宽度超过1000px时压缩
		'widthGreaterThan' => '1000',
		// 当高度超过1000px时压缩
		'heightGreaterThan' => '1000',
		// 当图片文件大于该值是压缩，单位为KB，注意单位只能是KB，假如你想要超过2M时才压缩，则填2048即可，因为2048即为2M(注意在Mac上2000就是2M，即文件大小在Mac上是1000进位的，不是1024进位的)
		'sizeBiggerThan' => '1024',
	],

	//jpe图片专用，表示图片质量，0-100，数值越大，图片质量越好
	'quality' => 80,
	//png图片专用，压缩级别，0-9，0不压缩，1-9为不同压缩等级，数值越大，压缩的越厉害（图片质量也会越低，压缩速度也越慢）
	'compreLevel' => 9,

	//链接类型，四个值，normal, markdown, markdownWithLink, custom，不填或者填的值不在这四个值里，按normal算
	//其中markdownWithLink表示点击后会跳转到图片源地址
	'linkType' => 'custom',
	//自定义返回链接格式，其中{{url}}在返回的时候会被替换为图片url，{{name}}会被替换为上传的图片名称（这样做主要为了小图居中）
	'customFormat' => getenv('CUSTOM_FORMAT')?:'<p align="center"><img src="{{url}}" title="{{name}}" alt="{{name}}" width="80%"></p>',
	//视频返回链接格式
	'videoFormat' => getenv('VIDEO_FORMAT')?:'<video controls name="media" title="{{name}}" width="935"><source src="{{url}}" type="video/mp4"></video>',
	//音频返回链接格式
	'audioFormat' => getenv('AUDIO_FORMAT')?:'<audio controls name="media" title="{{name}}" width="400" src="{{url}}" title="{{name}}">',

	//存储服务器，值为：Qiniu/Tencent/Netease/Baidu/Aliyun/Jd/Upyun/Smms/Imgur
	'storageType' => getenv('STORAGE_TYPE')?:'Qiniu',
	//存储服务器可写多个，表示同时传到多个地方，有两种写法，一是用逗号隔开，二是直接用数组，如
	// 'storageType' => 'Upyun, Qiniu',
	//或使用数组写法，两种方式用一种即可，
	/*'storageType' => [
		'Upyun',
		'Qiniu',
	],*/

	//日志真实记录在系统日志目录下：在本项目目录下的logs目录中
	//但你可通过该项配置建立一个软链接(即快捷方式)到你想要的地方
	//你可以填写两种值：
	//1、填写：desktop，则你的桌面会出现一个PicUploader_Upload_Logs文件夹，打开该文件夹即可看到日志(win10由于权限原因无法实现该功能)
	//2、填写实际路径，比如你填写：/User/你的用户名/Downloads，则会在/User/你的用户名/Downloads下出现一个PicUploader_Upload_Logs文件夹
	//3、如果不填，或者填写的既不是desktop也不是一个存在的路径，则不创建符号链接，但日志还是会存往：本项目目录下的logs目录中
	//4、建议保持默认不要动，即放在桌面，这样方便查找日志
	'logPath' => 'desktop',

	//允许的图片类型
	/*'allowMimeTypes' => [
		'jpeg' => 'image/jpeg',
		'png' => 'image/png',
		'gif' => 'image/gif',
	],*/

	//watermark/水印
	'watermark' => [
		//两个值，0或1，0表示不添加水印，1表示添加水印
		'useWatermark' => getenv('WATERMARK')?1:0,

		//水印类型，支持图片水印和文字水印：image或text，如果是image，请填写以下image配置
		//如果是text，请填写以下的text配置。
		'type' => 'text',

		//图片水印配置
		'image' => [
			//alpha值为0-100，0完全透明(看不见)，100完全不透明（即数字越靠近0越透明，越靠近100越不透明）
			'alpha' => 50,

			//水印图片名称，默认为watermark.png，请把static/watermark/watermark.png替换为你自己的水印即可
			'watermark' => 'watermark.png',

			//position有四种值，分别对应图片四个角：top-left/top-right/bottom-left/bottom-right/left/right/top/bottom/center
			//对应：左上/右上/左下/右下/左/右/上/下/中间，默认是右下
			'position' => 'center',

			//设置离边界的距离，设置右边和下边距离，请用负数，设置左边和上边距离，请用正数
			//当你设置水印在右下角时，需要设置的距离为右边和下边（x、y都用负数）
			//当你设置水印在右上角时，需要设置的距离为右边和上边（x用负数，y用正数）
			//当你设置水印在左上角时，需要设置的距离为左边和上边（x、y都用正数）
			//当你设置水印在左下角时，需要设置的距离为左边和上边（x用正数，y用负数）
			//当你设置水印在中间时，需要设置的距离为左边和上边（x、y都用正数将会稍向右下偏移，都用负数则会稍向右上偏移）
			//如果还是搞不懂，自己随便设置个值试一下，正的不行就用负，试一试就懂了
			'offset' => [
				//设置距离左右边界的距离
				'x' => -10,
				//设置距离上下边界的距离
				'y' => -10,
			],
		],

		//文字水印配置（当type=text时，该配置才会用到）
		'text' => [
			//水印文字
			'word' => getenv('WATERMARK')?:"ZQiannnn",

			//文字颜色，有两种格式，1、使用标准的16进制色值（文字无透明度），2、使用rgba颜色（可让文字带透明度）
			// 'color' => '#ff0000',
			//rgba格式颜色，可设置透明度，rgb分别是红绿蓝光的三原色，取值范围都是：0-255
			//a表示透明度，可用两位小数，0.00-1.00，数字越小越透明，如果设置到0则完全透明(即看不见)，如果设置到1则完全不透明(即相当于没有设置透明度)
			'color' => 'rgba(255,0,0,0.10)',

			//字体文件名（字体文件必须为.ttf格式，且必须放在static/watermark文件夹下，windows下最好把字体文件名改为英文，实测win10上写中文名找不到字体文件）
			//下载字体网站：http://www.17ziti.com（字体之家）
			'fontFile' => 'jdchj.ttf',

			//字体大小，整型数字，数字越大字体越大
			'fontSize' => 30,

			//逆时针旋转角度(0-360)，如果要顺时针旋转，请用负数
			'angle' => 45,

			//position有四种值，分别对应图片四个角：top-left/top-right/bottom-left/bottom-right/left/right/top/bottom/center
			//对应：左上/右上/左下/右下/左/右/上/下/中间，默认是右下
			'position' => 'center',

			//水印距离边的距离，与图片水印的一样
			'offset' => [
				'x' => 0,
				'y' => 60,
			],
		],
	],

	//允许一次性同时上传的文件数
	'maxNum' => 10,

	//0: 使用随机字符串文件名(这样不会覆盖原图)
	//1: 使用原文件名，有可能会覆盖原图(同一天上传同一文件名的文件两次以上，后面的就会覆盖前面的)
	'keepOriginalFilename' => 0,

	//数据库是用于存储上传历史记录的，不存储配置
	'database' => [
		// 如果使用Sqlite，不需要指定db的具体路径，不需要修改，直接这样就能用
		'dsn' => 'sqlite:PicUploader.db',
		//dbname=PicUploader指定的是数据库名，这个数据库必须要自己手动在mysql中创建，而表则会自动创建
		//'dsn' => 'mysql:host=127.0.0.1:3306;dbname=PicUploader',
		//如果用sqlite，则用户名密码不会被使用，只有mysql/MariaDB才会用到
		'username' => 'root',
		'password' => '123',
	],

	//常用目录，用于网页版上传时快速设置当前想上传到哪
	'commonUsedDirs' => [
		// “/{Y}/{m}/{d}/” 会被替换成当前的年月日，即“/2019/05/15/”这样的形式
		'/{Y}/{m}/{d}/',
		'/images/{Y}/{m}/{d}/',
	],
];

return $config;
