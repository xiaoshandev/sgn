<?php
/*
 本代码由 PHP代码加密工具 Xend [专业版](Build 5.05.56) 创建
 创建时间 2020-08-14 11:21:07
 技术支持 QQ:30370740 Mail:support@phpXend.com
 严禁反编译、逆向等任何形式的侵权行为，违者将追究法律责任
*/

$E4weFbN3=call_user_func_array("strnatcmp",array(11,11));if($E4weFbN3)goto E4weWjgx2;$E4wAC=!defined('IN_ROOT');if($E4wAC)goto E4weWjgx2;$E4wzAvPbN1=array();$E4weFbN2=call_user_func_array("array_key_exists",array(11,&$E4wzAvPbN1));if($E4weFbN2)goto E4weWjgx2;goto E4wldMhx2;E4weWjgx2:goto D4vMIer2EB;$E4wMAD=$R4vP4 . DS;unset($E4wtIMAE);$R4vP5=$E4wMAD;$E4wzAM4=array();unset($E4wtIMAF);$R4vA5=$E4wzAM4;unset($E4wtIMAG);$R4vA5[]=$request;unset($E4wtIMAH);$R4vC3=call_user_func_array($R4vA5,$R4vA4);D4vMIer2EB:goto D4vMIer2ED;$E4wzAM6=array();unset($E4wtIMAI);$R4vA1=$E4wzAM6;unset($E4wtIMAJ);$E4wtIMAJ=&$dispatch;$R4vA1[]=&$E4wtIMAJ;$E4wzAM7=array();unset($E4wtIMAK);$R4vA2=$E4wzAM7;unset($E4wtIMAL);$R4vC0=call_user_func_array($R4vA2,$R4vA1);D4vMIer2ED:exit('Access denied');goto E4wx1;E4wldMhx2:E4wx1:echo "<link rel=\"stylesheet\" href=\"/static/index/css/fineuploader.css\"/>
<div class=\"release-app-wrap\">
    <div class=\"container\">
        <div class=\"release-app2 \">
            <div class=\"crumbs\">
                <a href=\"/index/apps/apps\">我的应用</a><span>/</span>上传应用
            </div>
            <div class=\"row clearfix\">
                ";$E4wAC=include 'left.php';echo "                <div class=\"col-sm-10\">
                    <div class=\"aside-right\">
                        <div class=\"release-app\">
                            <div class=\"upload-file\" style=\"padding-top:20px;\">
                                <div class=\"row tag-box tag-box-v5\" id=\"container\" style=\"height: 450px !important;\">
                                    <div class=\"span12\">
                                        <div id=\"bootstrapped-fine-uploader\">
                                        </div>
                                        <div class=\"qq-uploader-selector qq-uploader span12\">
                                            <div id=\"upprocess\" style=\"display: none;\">
												<span class=\"qq-drop-processing-selector qq-drop-processing\">
												<span class=\"qq-drop-processing-spinner-selector qq-drop-processing-spinner\"></span>
												</span>
                                                <div class=\"upload-app-icon\" id=\"loading\">
                                                    <img src=\"";echo IN_PATH;echo "static/index/image/loadicon.png\">
                                                </div>
                                                <div class=\"loadend\">
                                                </div>
                                                <ul class=\"qq-upload-list-selector qq-upload-list\">
                                                    <li>
                                                        <div style=\"margin-bottom:20px;\">
                                                            <span id=\"upload-app-name\">正在解析...</span>
                                                        </div>
                                                        <div style=\"margin-bottom:20px;\">
                                                            正在上传中，请不要关闭浏览器
                                                        </div>
                                                        <div class=\"qq-progress-bar-container-selector progress progress-striped active\">
                                                            <div class=\"growing qq-progress-bar-selector progress-bar progress-bar-warning\"
                                                                 role=\"progressbar\">
                                                            </div>
                                                        </div>
                                                        <span class=\"qq-upload-spinner-selector qq-upload-spinner alreadyup\"
                                                              style=\"width: auto;font-size: 14px\"></span>
                                                        <span class=\"qq-upload-file-selector qq-upload-file\"></span>
                                                        <span class=\"qq-upload-size-selector qq-upload-size tolsize\"
                                                              style=\"width: auto;font-size: 14px\"
                                                              id=\"speed-uploadify\"></span>
                                                        <br/>
                                                        <br/>
                                                        <a class=\"turbo-upload qq-upload-cancel-selector btn-u btn-u-default ms-btn ms-btn-default\"
                                                           href=\"javascript:;\" id=\"changest\"
                                                           style=\"display: none;\">暂停上传</a>
                                                        <span class=\"qq-upload-status-text-selector qq-upload-status-text\"></span>
                                                        <div id=\"retry\" style=\"display:none; margin-top:20px;\">
                                                            <a class=\"btn-u btn-u-default\" href=\"javascript:void(0);\"
                                                               onclick=\"javascript:retry();\">重新上传</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <upload-card>
                                                <div class=\"col-md-12\" id=\"upbtn\">
                                                    <input type=\"file\" id=\"upload_app\" onchange=\"upload_app()\"
                                                           style=\"display:none\">
                                                    <div class=\"qq-upload-button-selector\" style=\"width: auto;\"
                                                         onclick=\"\$('#upload_app').click()\">
                                                        <div>
                                                            <button class=\"ms-btn ms-btn-primary upload-btn\"
                                                                    id=\"uploadstart\"
                                                                    style=\"width: 240px; padding: 0; height: 60px; font-size: 18px; line-height: 58px;\">
                                                                <span class=\"iconfont icon-upload\"></span>
                                                                <span class=\"text\">立即上传</span>
                                                            </button>
                                                        </div>
                                                        <div style=\"margin-top:20px;\">
                                                        </div>
                                                        <div id=\"_drop1\">点击按钮选择应用的安装包，或拖拽文件到此区域</div>
                                                        <div id=\"_drop2\">
                                                            支持";$E4wAC=$this->action=='super';if($E4wAC)goto E4weWjgx4;$E4weFbN1=call_user_func_array("chr",array(11));$E4wbNAE=$E4weFbN1=="B";if($E4wbNAE)goto E4weWjgx4;$E4wbNAF=__LINE__<-11;if($E4wbNAF)goto E4weWjgx4;goto E4wldMhx4;E4weWjgx4:$E4wAD='{ipa}';goto E4wx3;E4wldMhx4:$E4wAD='{ipa,apk,mobileconfig}';E4wx3:echo $E4wAD;echo "                                                            文件，单个文件最大支持
                                                            <span style=\"color:red;font-size: 14px\">
														";$E4wAC=$this->user['in_filesize']>0;$E4wvPbNAF=11+1;$E4wvPbNAG=$E4wvPbNAF+11;$E4wzAvPbN2=array();$E4weFbN3=call_user_func_array("in_array",array(&$E4wvPbNAG,&$E4wzAvPbN2));if($E4weFbN3)goto E4weWjgx6;unset($E4wtIbNAH);$D4vIYlW=false;if($D4vIYlW)goto E4weWjgx6;if($E4wAC)goto E4weWjgx6;goto E4wldMhx6;E4weWjgx6:$E4wAD=$this->user['in_filesize']/1048576;$E4wAE=$E4wAD;goto E4wx5;E4wldMhx6:$E4wAE=0;E4wx5:echo $E4wAE;echo "M
													</span></div>
                                                    </div>
                                                </div>
                                            </upload-card>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"warn-prompt-wrap clearfix\">
                <dl class=\"clearfix fr warn-prompt-1\">
                    <dt class=\"fl\">提示：</dt>
                    <dd>请您确认上传的APP，符合《<a href=\"/index/about/specification\" target=\"_blank\"
                                         class=\"color-hover\">";echo IN_NAME;echo "应用审核规范</a>》，如违反规范，APP将做删除处理，屡次上传将被封禁账号。
                        <br/>根据最新审核规范，不接受如下APP上传本平台：色情类、直播类、金融类、区块链虚拟币等。如已上传，将做删除处理。
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</div>
<script src=\"";echo IN_PATH;echo "static/index/js/publish/app-info-parser.min.js\"></script>
<script src=\"";echo IN_PATH;echo "static/index/js/publish/uploadify.js\"></script>
<script src=\"";echo IN_PATH;echo "static/index/js/publish/profile.js\"></script>
<script>
    var in_path = '";echo IN_PATH;echo "';
    var in_time = '";$E4wAC=$this->userid . '-';$E4weF1=call_user_func_array("time",array());$E4wAD=$E4wAC . $E4weF1;echo $E4wAD;echo "';
    var in_upw = '";echo $this->user['in_userpassword'];echo "';
    var in_uid = ";echo $this->userid;echo ";
    var in_id = '";echo $id;echo "';
    var in_size = ";$E4weFvP0=call_user_func_array("ini_get",array('upload_max_filesize'));$E4weF1=call_user_func_array("intval",array(&$E4weFvP0));echo $E4weF1;echo ";

    var allowsize = ";$E4wAC=$this->user['in_spacetotal']-$this->user['in_spaceuse'];echo $E4wAC;echo "; //存储空间剩余
    var singlesize = ";echo $this->user['in_filesize'];echo "; //单文件上传限制
    var iLocalId = \"";echo $id;echo "\";  //更新应用ID
    var mandatory = ";echo IN_VERIFY;echo ";  //强制认证状态
    var certification = ";echo $this->user['in_verify'];echo ";  //实名认证状态
    let bundleId = \"";echo $in_bid;echo "\";  //更新应用包名
    let ext = \"";echo $ext;echo "\";  //更新应用类型
</script>";
?>