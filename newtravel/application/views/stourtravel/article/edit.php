<!doctype html>
<html>
<head>

    <meta charset="utf-8">
<title>文章添加/修改</title>
    {template 'stourtravel/public/public_js'}
    {php echo Common::getCss('style.css,base.css,base2.css'); }
    {php echo Common::getScript("uploadify/jquery.uploadify.min.js,product_add.js,choose.js,imageup.js"); }
    {php echo Common::getCss('uploadify.css','js/uploadify/'); }
    <script src="/res/js/myjs/travels-publish.js" type="text/javascript"></script>
    <link rel="stylesheet" href="/res/css/mycss/notes/travels-publish.css" type="text/css">

</head>

<body>
	<table class="content-tab">
    <tr>
    <td width="119px" class="content-lt-td"  valign="top">
     {template 'stourtravel/public/leftnav'}
    <!--右侧内容区-->
    </td>
     <td valign="top" class="content-rt-td ">

          <form method="post" name="product_frm" id="product_frm">
          <div class="manage-nr">
              <div class="w-set-tit bom-arrow" id="nav">
                  <span class="on"><s></s>基础信息</span>
                  <span data-id="tupian"><s></s>攻略附件</span>
                  <span data-id="youhua"><s></s>优化设置</span>
                  <span data-id="extend"><s></s>扩展设置</span>
                  <span data-id="Classification" ><s></s>分级设置</span>
                  <a href="javascript:;" class="refresh-btn" onclick="window.location.reload()">刷新</a>
              </div>

               <!--基础信息开始-->
              <div class="product-add-div">
                      <div class="add-class">
                          <dl>
                              <dt>站点：</dt>
                              <dd>

                                  <select name="webid">
                                      <option value="0" {if $info['webid']==0}selected="selected"{/if}>主站</option>
                                      {loop $weblist $k}
                                      <option value="{$k['webid']}" {if $info['webid']==$k['webid']}selected="selected"{/if} >{$k['webname']}</option>
                                      {/loop}

                                  </select>

                              </dd>
                          </dl>
                          <dl>
                              <dt>文章标题：</dt>
                              <dd>
                                  <input type="text" name="title" id="articlename" class="set-text-xh text_700 mt-2 w300"  value="{$info['title']}" />
                                  <div class="help-ico mt-9 ml-5">{php echo Common::getIco('help',40); }</div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>作者：</dt>
                              <dd>
                                  <input type="text" name="author" id="author" class="set-text-xh text_250 mt-2 w300" value="{$info['author']}" />
                              </dd>
                          </dl>
                          <dl>
                              <dt>文章来源：</dt>
                              <dd>
                                  <input type="text" name="comefrom" id="comefrom" class="set-text-xh text_250 mt-2 w300" value="{$info['comefrom']}" />
                              </dd>
                          </dl>

                          <dl>
                              <dt class="w160">来源网址：</dt>
                              <dd>
                                  <input type="text" name="fromsite" id="fromsite" class="set-text-xh text_250 mt-2 w300" value="{$info['fromsite']}" />
                              </dd>
                          </dl>

                          <dl>
                              <dt>显示模版：</dt>
                              <dd>
                                  <div class="temp-chg" id="templet_list">
                                      <a {if $info['templet']==''}class="on"{/if}  href="javascript:void(0)"  data-value="" onclick="setTemplet(this)">标准1</a>
                                      <a {if $info['templet']=='moban2'}class="on"{/if}  href="javascript:void(0)"  data-value="moban2" onclick="setTemplet(this)">标准2</a>
                                      {loop $templetlist $r}
                                      <a {if $info['templet']==$r['path']}class="on"{/if}  href="javascript:void(0)" data-value="{$r['path']}" onclick="setTemplet(this)">{$r['templetname']}</a>
                                      {/loop}
                                      <input type="hidden" name="templet" id="templet" value="{$info['templet']}"/>
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>封面图片：</dt>
                              <dd>
                                  <p>

                                      <label>
                                      	<input class="fl mt-8 mr-3" type="checkbox" name="allow"  {if $info['allow']=='usecontentpic'}checked="checked"{/if} value="usecontentpic">
                                        <span>使用文章内图片作封面</span>
                                      </label>


                                  </p>
                              </dd>
                          </dl>


                      </div>
                      <div class="add-class">
                          <dl>
                              <dt>目的地选择：</dt>
                              <dd>
                                  <a href="javascript:;" class="choose-btn mt-4" onclick="Product.getDest(this,'.dest-sel',4)"  title="选择">选择</a>
                                  <div class="save-value-div mt-2 ml-10 dest-sel">
                                      {loop $info['kindlist_arr'] $k $v}
                                       <span class="{if $info['finaldestid']==$v['id']}finaldest{/if}" title="{if $info['finaldestid']==$v['id']}最终目的地{/if}" ><s onclick="$(this).parent('span').remove()"></s>{$v['kindname']}<input type="hidden" class="lk" name="kindlist[]" value="{$v['id']}"/>
                                           {if $info['finaldestid']==$v['id']}<input type="hidden" class="fk" name="finaldestid" value="{$info['finaldestid']}"/>{/if}</span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>所属景区选择：</dt>
                              <dd>
                                  <a href="javascript:;" class="choose-btn mt-4" onclick="Product.getSpot(this,'.spot-sel',4)"  title="选择">选择</a>
                                  <div class="save-value-div mt-2 ml-10 spot-sel">
                                      {loop $info['spotlist_arr'] $k $v}
                                       <span   >
                                           <s onclick="$(this).parent('span').remove()"></s>
                                           {$v['title']}
                                           <input type="hidden" class="lk" name="spotlist[]" value="{$v['id']}"/>

                                       </span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>目的地点：</dt>
                              <dd>
                                  <div >
                                     <input type="text" name="g_mdd" id="g_mdd" class="set-text-xh text_250 mt-2 w300" value="{$info['gl_mdd']}">
                                  </div>
                              </dd>
                          </dl>
                          <!--------新增  09.02------>
                          <dl>
                              <dt>出行天数：</dt>
                              <dd>
                                  <div >
                                      <input type="text" name="travel_day" id="travel_day" class="set-text-xh text_250 mt-2 w300" value="{$info['travel_day']}">
                                  </div>
                              </dd>
                          </dl>

                          <dl>
                              <dt>文章属性：</dt>
                              <dd>

                                  <a href="javascript:;" class="choose-btn mt-4" onclick="Product.getAttrid(this,'.attr-sel',4)"  title="选择">选择</a>
                                  <div class="save-value-div mt-2 ml-10 attr-sel">
                                      {loop $info['attrlist_arr'] $k $v}
                                      <span><s onclick="$(this).parent('span').remove()"></s>{$v['attrname']}<input type="hidden" name="attrlist[]" value="{$v['id']}"></span>
                                      {/loop}
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt>摘要：</dt>
                              <dd style="height:auto">
                                  <textarea class="set-area wid_695"  name="summary" id="" cols="" rows="">{$info['summary']}</textarea>
                              </dd>
                          </dl>

                          <dl id="gf_content"  {if $info['templet']=='moban2'}style="display:block"{else}style="display:none"{/if}>
                              <dt>文章内容: </dt>
                              <dd style="line-height: 20px">
                                  {php Common::getEditor('content',$info['content'],700,400,'raider');}
                              </dd>

                          </dl>
                          <dl id="bz_content" {if $info['templet']!='moban2'}style="display:block"{else}style="display:none"{/if} >
                              <dt>文章内容: </dt>
                              <dd style="line-height: 20px">
                                  {php Common::getEditor('bzcontent',$info['content'],700,400);}
                              </dd>

                          </dl>

                          <dl>
                              <dt>前台隐藏：</dt>
                              <dd>
                                  <label>
                                    <input class="fl mt-8 mr-3" type="radio" name="ishidden"  {if $info['ishidden']==0}checked="checked"{/if} value="0">
                                    <span class="fl mr-20">显示</span>
                                  </label>
                                  <label>
                                    <input class="fl mt-8 mr-3" type="radio" name="ishidden"  {if $info['ishidden']==1}checked="checked"{/if} value="1">
                                    <span>隐藏</span>
                                  </label>
                              </dd>
                          </dl>
                          <dl>
                              <dt>是否推荐：</dt>
                              <dd>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="isrecommend"  {if $info['isrecommend']==0}checked="checked"{/if} value="0">
                                      <span class="fl mr-20">不推荐</span>
                                  </label>
                                  <label>
                                      <input class="fl mt-8 mr-3" type="radio" name="isrecommend"  {if $info['isrecommend']==1}checked="checked"{/if} value="1">
                                      <span>推荐</span>
                                  </label>
                              </dd>
                          </dl>
                      </div>

                  </div>
              <!--/基础信息结束-->
              <div class="product-add-div" data-id="tupian">
                  <div class="up-pic">
                      <dl>
                          <dt>攻略图片：</dt>
                          <dd>
                              <div class="up-file-div">
                                  <div id="pic_btn" class="btn-file mt-4">上传图片</div>
                              </div>
                              <div class="up-list-div">
                                  <input type="hidden" class="headimgindex" name="imgheadindex" value=""/>
                                  <input type="hidden" name="litpic" id="litpic" value="{$info['litpic']}"/>
                                  <ul class="pic-sel">

                                  </ul>
                              </div>
                          </dd>
                      </dl>
                      <dl>
                        <dt>攻略附件:</dt>
                           <dd>
                               <div class="up-file-div">

                                   <div id="attach_btn" class="btn-file mt-4">上传附件</div>
                                   <input type="hidden" name="attachment" id="attachment" value="{$info['attachment']}">
                               </div>
                              <div id="doclist" class="doclist">
                                  {if !empty($info['attachment'])}
                                  <a href="{$cmsurl}{$info['attachment']}">查看附件</a>
                                  <a href="javascript:;" onclick="delAttach()">删除</a>
                                  {/if}
                              </div>
                           </dd>

                      </dl>


                  </div>
              </div>

              <div class="product-add-div" data-id="youhua">
                      <div class="add-class">
                          <dl>
                              <dt>优化标题：</dt>
                              <dd>
                                  <input type="text" name="seotitle" id="seotitle" class="set-text-xh text_700 mt-2 w500" value="{$info['seotitle']}" >
                              </dd>
                          </dl>
                          <dl>
                              <dt>301重定向：</dt>
                              <dd>
                                  <input type="text" name="redirecturl" id="redirecturl"  class="set-text-xh text_700 mt-2 w300" value="{$info['redirecturl']}">
                              </dd>
                          </dl>
                          <dl>
                              <dt>访问量：</dt>
                              <dd>
                                  <input type="text" name="shownum" id="shownum"  class="set-text-xh text_700 mt-2 w50" value="{$info['shownum']}">
                              </dd>
                          </dl>
                          <dl>
                              <dt>Tag词：</dt>
                              <dd>
                                  <input type="text" id="tagword" name="tagword" class="set-text-xh text_700 mt-2" value="{$info['tagword']}" >
                              </dd>
                          </dl>
                          <dl>
                              <dt>关键词：</dt>
                              <dd>
                                  <input type="text" name="keyword" id="keyword" name="keyword" class="set-text-xh text_700 mt-2 w300" value="{$info['keyword']}">
                              </dd>
                          </dl>
                          <dl>
                              <dt>页面描述：</dt>
                              <dd style="height:auto">
                                  <textarea class="set-area wid_695"  name="description" id="description" cols="" rows="">{$info['description']}</textarea>
                              </dd>
                          </dl>

                      </div>
                  </div>

              <div class="product-add-div" data-id="extend">
                      {php Common::genExtendData(4,$extendinfo);}
                  </div>

              <!-----分级设置-------->
              <div class="product-add-div" data-id="Classification" style="width: 84%">
               <div style="width: 100%;height:80px;padding: 5px"> <dl>
                       <span>温馨提示：需要保存图片操作，需将攻略附件中的封面图和缩列图传好</span>
                       <dt> 将内容中图片保存到&nbsp;<span style="color: #d0010e;font-size: 16px;">&uarr;</span>&nbsp;攻略附件：</dt>

                       <dd>

                           <div class="on-off">

                               <input type="radio" id="" class="fl mt-8"  name="show" value="0" checked="checked">

                               <label class="fl mr-20 ml-5">否</label>

                               <input type="radio" id="" class="fl mt-8"  name="show" value="1">

                               <label class="fl mr-20 ml-5">是</label>

                           </div>

                       </dd>

                   </dl></div>
                  <div class="zhangjieTit" >

                     {loop $info['mulu'] $k $m}

                      <div class="zhangjieSeed">
                          <div class="ClickSeed MainCatalog noOnthisSeed" id="M{$k}">
                              <h4><span></span>章节{$k+1}<a style="display: none;" name = "delete" onclick="dele(this)" data-id ="M{$k}" href="javascript:void(0);"></a></h4>
                          </div>
                          {loop  $m['child'] $key $j}

                           <div onclick="s(this)" class="ClickSeed ChildCatalog noOnthisSeed" id='M{$k}-{$key+1}'>
                           <h4><span></span>子目录{$key+1}<a style="display:none;"  href="javascript:void(0);" onclick="dele_zi(this)" data-id ='M{$k}-{$key+1}'></a></h4>
                           </div>

                          {/loop}
                          <!-----添加子目录--->
                          <div class="addChild" onclick="chil(this)" style="float:none">
                              <a href="javascript:void(0);">添加子目录</a>
                          </div>
                          <div class="clearfix"></div>
                      </div>

                      {/loop}
                      <!------增加主目录--->
                      <div class="addMain">
                          <a href="javascript:void(0);">增添章节</a>
                      </div>
                  </div>
                  <div class="zhangjieBody">

                      {loop  $info['mulu'] $ke $v}
                      <div class="zhangjieCon">
                          <!--右边主章节title he 文本框--->
                          <div style="" class="zhangjieBodyMain" id="A{$ke}">
                              <div class="inputTit">
                                  <p>{$v['title']}</p>
                                  <span></span>
                              </div>
                              <input type="hidden" name="A{$ke}_id" id="A{$ke}_id" value="{$v['id']}">
                              <div class="zhangjieA none">
                                  <div class="zhangjieBiaoti">
                                      <input dayid="0" isnew="true" name="A{$ke}" class="" maxlength="40" type="text" value="{$v['title']}">
                                      <label style="display: block;" class="zhangjieTitle"></label>
                                  </div>
                                  <div class="zjshengxiazi"><em>0</em>/40</div>

                                  <div class="youjiMain">
                                      <dl id="A{$ke}_con">
                                      <dt>文章内容: </dt>
                                      <dd style="line-height: 20px">

                                         <div id="A{$ke}_con" style="width:700px; margin:5px 0px 5px 5px; text-indent:0;"></div>
                                          <script type="text/javascript">
                                          var bzcontentEditor;
                                          var optionsbzcontent = { "toolbars": [ [ "fullscreen", "source", "|", "undo", "redo", "|", "bold", "italic", "underline", "fontborder", "strikethrough", "superscript", "subscript", "removeformat", "formatmatch", "autotypeset", "blockquote", "pasteplain", "|", "forecolor", "backcolor", "insertorderedlist", "insertunorderedlist", "selectall", "cleardoc", "|", "rowspacingtop", "rowspacingbottom", "lineheight", "|", "customstyle", "paragraph", "fontfamily", "fontsize", "|", "directionalityltr", "directionalityrtl", "indent", "|", "justifyleft", "justifycenter", "justifyright", "justifyjustify", "|", "touppercase", "tolowercase", "|", "link", "unlink", "anchor", "|", "imagenone", "imageleft", "imageright", "imagecenter", "|", "vseem", "insertvideo", "map", "gmap", "|", "horizontal", "date", "time", "spechars", "snapscreen", "|", "inserttable", "deletetable", "insertparagraphbeforetable", "insertrow", "deleterow", "insertcol", "deletecol", "mergecells", "mergeright", "mergedown", "splittocells", "splittorows", "splittocols", "|", "print", "preview", "searchreplace", "drafts", "autosave" ] ], "minFrameHeight": "300", "initialFrameHeight": "300", "initialFrameWidth": "700", "autoHeightEnabled": false, "UEDITOR_HOME_URL": "\/newtravel\/public\/vendor\/slineeditor\/", "textarea": "A{$ke}_con", "initialContent": {$v[content]}, "wordCount": false, "elementPathEnabled": false, "enableAutoSave": true };
                                          bzcontentEditor = new baidu.editor.ui.Editor(optionsbzcontent);bzcontentEditor.render("A{$ke}_con");
                                          </script>
                                          </dd>
                                      </dl>
                                  </div>
                              </div>
                          </div>
                          <!----右边子章节      文本框 ------------->
                          {loop  $v['child'] $key1 $p}
                          <div style="" class="zhangjieBodyChild none" id="A{$ke}-{$key1+1}">
                              <div class="inputTit">
                                 <p>A{$ke}-{$key1+1}</p>
                                 <span></span>
                                 </div>
                              <input type="hidden" name="A{$ke}-{$key1+1}_id" id="A{$ke}-{$key1+1}_id" value="{$p['id']}">
                              <div class="zhangjieA none">
                                 <div class="zhangjieBiaoti">
                                      <input dayid="0" isnew="true" name="A{$ke}-{$key1+1}" class="" maxlength="40" type="text" value="{$p['title']}">
                                     <label style="display: block;" class="zhangjieTitle"></label>
                                   </div>
                                  <div class="zjshengxiazi"><em>0</em>/40</div>
                                  <div class="youjiMain">


                                      <dl id="A{$ke}-{$key1+1}_con">
                                          <dt>文章内容: </dt>
                                         <dd style="line-height: 20px">

                                              <div id="A{$ke}-{$key1+1}_con" style="width:700px; margin:5px 0px 5px 5px; text-indent:0;"></div>
                                              <script type="text/javascript">
                                              var bzcontentEditor;
                                              var optionsbzcontent = { "toolbars": [ [ "fullscreen", "source", "|", "undo", "redo", "|", "bold", "italic", "underline", "fontborder", "strikethrough", "superscript", "subscript", "removeformat", "formatmatch", "autotypeset", "blockquote", "pasteplain", "|", "forecolor", "backcolor", "insertorderedlist", "insertunorderedlist", "selectall", "cleardoc", "|", "rowspacingtop", "rowspacingbottom", "lineheight", "|", "customstyle", "paragraph", "fontfamily", "fontsize", "|", "directionalityltr", "directionalityrtl", "indent", "|", "justifyleft", "justifycenter", "justifyright", "justifyjustify", "|", "touppercase", "tolowercase", "|", "link", "unlink", "anchor", "|", "imagenone", "imageleft", "imageright", "imagecenter", "|", "vseem", "insertvideo", "map", "gmap", "|", "horizontal", "date", "time", "spechars", "snapscreen", "|", "inserttable", "deletetable", "insertparagraphbeforetable", "insertrow", "deleterow", "insertcol", "deletecol", "mergecells", "mergeright", "mergedown", "splittocells", "splittorows", "splittocols", "|", "print", "preview", "searchreplace", "drafts", "autosave" ] ], "minFrameHeight": "300", "initialFrameHeight": "300", "initialFrameWidth": "700", "autoHeightEnabled": false, "UEDITOR_HOME_URL": "\/newtravel\/public\/vendor\/slineeditor\/", "textarea": "A{$ke}-{$key1+1}_con", "initialContent": {$p[content]}, "wordCount": false, "elementPathEnabled": false, "enableAutoSave": true };
                                              bzcontentEditor = new baidu.editor.ui.Editor(optionsbzcontent);bzcontentEditor.render("A{$ke}-{$key1+1}_con");
                                              </script>
                                         </dd>
                                      </dl>

                                   </div>
                                 </div>
                          </div>
                          {/loop}
                      </div>
                      {/loop}
                  </div>
              </div>


              <div class="opn-btn">

                      <input type="hidden" name="productid" id="productid" value="{$info['id']}"/>
                      <input type="hidden" name="action" id="action" value="{$action}"/>

                      <a class="normal-btn ml-20" id="btn_save" href="javascript:;">保存</a>

                      <a class="normal-btn ml-20" id="btn_saves" data-id="Classification" href="javascript:;">保存&nbsp;&nbsp;[仅保存分级内容]</a>
              </div>

          </div>
        </form>
    </td>
    </tr>
    </table>
    {php echo Common::getScript("layer/layer.js"); }
	<script>
        //添加主章节
        $(".addMain").click(function(){

            var  zhangjie  = $(".zhangjieSeed").length*1;
            // 新的主章节左边
            var newLeftAdd ='<div class="zhangjieSeed">';
            newLeftAdd+='<div onclick="s(this)" class="ClickSeed MainCatalog noOnthisSeed" id="M'+zhangjie+'">';
            newLeftAdd+='<h4><span></span>章节'+(zhangjie+1)+'<a style="display: none;" name ="delete" onclick="dele(this)" data-id ="M'+zhangjie+'" href="javascript:void(0);"></a></h4>';
            newLeftAdd+='</div>';
            newLeftAdd+='<div class="addChild" onclick="chil(this)" style="float:none">';
            newLeftAdd+='<a href="javascript:void(0);">添加子目录</a>';
            newLeftAdd+='</div>';
            newLeftAdd+='<div class="clearfix"></div>';
            newLeftAdd+='</div>';


            //    // 新的主章节 右边
            var newRightAdd ='<div class="zhangjieCon" data-name="">';
            newRightAdd+='<div style="" class="zhangjieBodyMain" id="A'+zhangjie+'">';
            newRightAdd+='<div class="inputTit">';
            newRightAdd+='<p>A'+(zhangjie+1)+'</p>';
            newRightAdd+='<span></span>';
            newRightAdd+='</div>';
            newRightAdd+='<input type="hidden" name="A'+zhangjie+'_id" id="A'+zhangjie+'_id" value="">';
            newRightAdd+='<div class="zhangjieA none">';
            newRightAdd+='<div class="zhangjieBiaoti">';
            newRightAdd+='<input dayid="0" isnew="true" name ="A'+zhangjie+'" class="" maxlength="40" type="text">';
            newRightAdd+='<label style="display: block;" class="zhangjieTitle"></label>';
            newRightAdd+='</div>';
            newRightAdd+='<div class="zjshengxiazi"><em>0</em>/40</div>';

            newRightAdd+='<div class="youjiMain">';
            newRightAdd+='<dl id="A'+zhangjie+'_con">';
            newRightAdd+='<dt>文章内容: </dt>';
            newRightAdd+='<dd style="line-height: 20px">';

            newRightAdd+='<div id="A'+zhangjie+'_con" style="width:700px; margin:5px 0px 5px 5px; text-indent:0;"></div>' +
                '<script '+'type="text/javascript">'+
                'var bzcontentEditor;' +
                'var optionsbzcontent = { "toolbars": [ [ "fullscreen", "source", "|", "undo", "redo", "|", "bold", "italic", "underline", "fontborder", "strikethrough", "superscript", "subscript", "removeformat", "formatmatch", "autotypeset", "blockquote", "pasteplain", "|", "forecolor", "backcolor", "insertorderedlist", "insertunorderedlist", "selectall", "cleardoc", "|", "rowspacingtop", "rowspacingbottom", "lineheight", "|", "customstyle", "paragraph", "fontfamily", "fontsize", "|", "directionalityltr", "directionalityrtl", "indent", "|", "justifyleft", "justifycenter", "justifyright", "justifyjustify", "|", "touppercase", "tolowercase", "|", "link", "unlink", "anchor", "|", "imagenone", "imageleft", "imageright", "imagecenter", "|", "vseem", "insertvideo", "map", "gmap", "|", "horizontal", "date", "time", "spechars", "snapscreen", "|", "inserttable", "deletetable", "insertparagraphbeforetable", "insertrow", "deleterow", "insertcol", "deletecol", "mergecells", "mergeright", "mergedown", "splittocells", "splittorows", "splittocols", "|", "print", "preview", "searchreplace", "drafts", "autosave" ] ], "minFrameHeight": "300", "initialFrameHeight": "300", "initialFrameWidth": "700", "autoHeightEnabled": false, "UEDITOR_HOME_URL": "\/newtravel\/public\/vendor\/slineeditor\/", "textarea": "A'+zhangjie+'_con", "initialContent": "", "wordCount": false, "elementPathEnabled": false, "enableAutoSave": true };  ' +
                'bzcontentEditor = new baidu.editor.ui.Editor(optionsbzcontent);bzcontentEditor.render("A'+zhangjie+'_con");'+
                '</scr'+'ipt>';
            newRightAdd+='</dd></dl>';
            newRightAdd+='</div>';
            newRightAdd+='</div>';
            newRightAdd+='</div>';
            newRightAdd+='</div>';
            //获取 文章的id
            var  articleid  =$("#productid").val();
            var  url   =SITEURL+"article/ajax_addmainlu";

            $(this).before(newLeftAdd);
            if(zhangjie==0){
                $(".zhangjieBody").html(newRightAdd);
            }else{
                $('.zhangjieBody .zhangjieCon:last').after(newRightAdd);
            }
            $.ajax({
                type:"POST",
                url :url,
                data:{articleid:articleid},
                success:function(data){

                    $("#A"+zhangjie+"_id").val(data);
                    $("#M"+zhangjie).click();

                }
            })



        });
        function s(t){
            var Catalogparent = $(t);
            var active = Catalogparent.hasClass('noOnthisSeed');//hasClass检查 是否有这个类名 you 返回true
            var sideId = Catalogparent.attr('id');

            $(".zhangjieCon input[isnew=true]").each(function(index, element) {

                text = $(this).val()
                $(this).parent().parent().prev().prev().children("p").text(text) ;

            });

            if(active){
                $('.ClickSeed').removeClass('onthisSeed').addClass('noOnthisSeed');
                Catalogparent.removeClass('noOnthisSeed').addClass('onthisSeed');
                Catalogparent.parent().addClass("active").siblings().removeClass("active");
            }

            $(".zhangjieBodySeed input").each(function(index, element) {

                text = $(this).val()

                $(this).parent().parent().prev().children("p").text(text) ;
            });

            ArticlesCrap(sideId);
        }
        function ArticlesCrap(sideId) {
            var ArticlId = "A"+sideId.substring(1);
            sideName = $("[id="+ArticlId+"]").attr("id");
            sideindex =  $("#"+sideName).index();
            $("#"+sideName).prevAll().removeClass("none");
            $("#"+sideName).nextAll().addClass("none");
            $("#"+sideName).parent().nextAll().addClass("none");
            $(".zhangjieCon").children().removeClass('articl');
            $("#"+sideName).addClass('articl').removeClass("none");

            $("#"+sideName).parent().removeClass("none");
            $("#"+sideName).parent().siblings().children(".zhangjieBodyChild").addClass("none")

            var target = "$('#'"+sideName+")";
            if (target != null && target.length > 0) {
                var targets = target.offset().top; //目标对象的位置，比如D
                var positionTop = targets - 10 + "px";

                $("html, body").animate({ scrollTop: positionTop }, 500); //500是ms,也可以用slow代替
            }
        }
        //======删除主目录
        function dele(th){
            var  this_id  =  $(th).attr('data-id');//删除元素的id  左边
            var  this_right_id   = this_id.replace("M",'A');  //  配置 右边的id 值

            var  zhangjie  = $(".zhangjieSeed").length*1;

            layer.confirm('确定要删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){

                  var  url   =SITEURL+"article/ajax_del_mulu";
                  //获取 主目录 的id
                  var  mulu_id =  $("#"+this_right_id+"_id").val();
                    $.ajax({
                        type: "GET",
                        url: url,
                        data: {mulu_id:mulu_id},
                        success: function(data) {
                            if (data) {
                                $("#"+this_id).parent().remove();
                                $("#"+this_right_id).parent().remove();
                                layer.msg('删除成功', {
                                    time: 2000, //2s后自动关闭
                                    btn: ['确定']
                                });

                            }
                        }
                    });
            });
        }
        //======添加子目录
        function chil(th){

            //获取主目录的id
            var main_id = $(th).parent().children('div').eq(0).attr("id");

            //获取 右边 id
            var right_id = main_id.replace('M','');

            //获取 子目录的长度  根据 div  的个数  以后添加 同级的div 会导致错误 ！！
            var child =$(th).parent().children('div').length*1-2;

            //获取  右边内容 最后一个子目录的input  框的内容
            var childs  =child-1;
//            if(childs!=0){
//                var  ch  =child-1;
//                var ringht_last_id = $("#A"+right_id+"-"+ch+" input").val();
//
//                if(ringht_last_id==''){
//                    layer.msg('{__("上一子章节需填写")}', {icon:5,time:1000});
//
//                    return;
//                }
//
//            }

            var addChildLeft ='<div onclick="s(this)" class="ClickSeed ChildCatalog noOnthisSeed" id='+main_id+'-'+child+'>';
                addChildLeft +='<h4><span></span>子目录'+child+'<a style="display:none;"  href="javascript:void(0);" onclick="dele_zi(this)" data-id ='+main_id+'-'+child+'></a></h4>';
                addChildLeft +='</div>';

            var addChildRight ='<div style="" class="zhangjieBodyChild none" id="A'+right_id+'-'+child+'">';
                addChildRight +='<div class="inputTit">';
                addChildRight +='<p>A'+right_id+'-'+child+'</p>';
                addChildRight +='<span></span>';
                addChildRight +='</div>';
                addChildRight +='<input type="hidden" name="A'+right_id+'-'+child+'_id" id="A'+right_id+'-'+child+'_id" value="">';
                addChildRight +='<div class="zhangjieA none">';
                addChildRight +='<div class="zhangjieBiaoti">';
                addChildRight +='<input dayid="0" isnew="true" name="A'+right_id+'-'+child+'" class="" maxlength="40" type="text">';
                addChildRight +='<label style="display: block;" class="zhangjieTitle"></label>';
                addChildRight +='</div>';
                addChildRight +='<div class="zjshengxiazi"><em>0</em>/40</div>';
                addChildRight +=' <div class="youjiMain">';


                addChildRight+='<dl id="A'+right_id+'-'+child+'_conq">';
                addChildRight+='<dt>文章内容: </dt>';
                addChildRight+='<dd style="line-height: 20px">';

                addChildRight+='<div id="A'+right_id+'-'+child+'_con" style="width:700px; margin:5px 0px 5px 5px; text-indent:0;"></div>' +
                    '<script '+'type="text/javascript">'+
                    'var bzcontentEditor;' +
                    'var optionsbzcontent = { "toolbars": [ [ "fullscreen", "source", "|", "undo", "redo", "|", "bold", "italic", "underline", "fontborder", "strikethrough", "superscript", "subscript", "removeformat", "formatmatch", "autotypeset", "blockquote", "pasteplain", "|", "forecolor", "backcolor", "insertorderedlist", "insertunorderedlist", "selectall", "cleardoc", "|", "rowspacingtop", "rowspacingbottom", "lineheight", "|", "customstyle", "paragraph", "fontfamily", "fontsize", "|", "directionalityltr", "directionalityrtl", "indent", "|", "justifyleft", "justifycenter", "justifyright", "justifyjustify", "|", "touppercase", "tolowercase", "|", "link", "unlink", "anchor", "|", "imagenone", "imageleft", "imageright", "imagecenter", "|", "vseem", "insertvideo", "map", "gmap", "|", "horizontal", "date", "time", "spechars", "snapscreen", "|", "inserttable", "deletetable", "insertparagraphbeforetable", "insertrow", "deleterow", "insertcol", "deletecol", "mergecells", "mergeright", "mergedown", "splittocells", "splittorows", "splittocols", "|", "print", "preview", "searchreplace", "drafts", "autosave" ] ], "minFrameHeight": "300", "initialFrameHeight": "300", "initialFrameWidth": "700", "autoHeightEnabled": false, "UEDITOR_HOME_URL": "\/newtravel\/public\/vendor\/slineeditor\/", "textarea": "A'+right_id+'-'+child+'_con", "initialContent": "", "wordCount": false, "elementPathEnabled": false, "enableAutoSave": true };  ' +
                    'bzcontentEditor = new baidu.editor.ui.Editor(optionsbzcontent);bzcontentEditor.render("A'+right_id+'-'+child+'_con");'+
                    '</scr'+'ipt>';
                addChildRight+='</dd></dl>';

                addChildRight += '</div>';
                addChildRight +='</div>';
                addChildRight +='</div>';

            //$('.zhangjieSeed .ChildCatalog:last').after(addChildLeft);
            $(th).before(addChildLeft);//左边
            //.zhangjieCon 类右边的设计 、是根据 div 的个数
            var childs  =child-1;

            if(childs==0){// 具体放到那个后面
                $("div[id=A"+right_id+"]").after(addChildRight);
            }else{
                $('div[id=A'+right_id+'-'+childs+']').after(addChildRight);
            }

            //获取 父级 的id
            var parentid    = $("#A"+right_id+'_id').val();
            //获取 文章的id
            var  articleid  =$("#productid").val();

            var   url   =SITEURL+"article/ajax_add_zimulu";

            $.ajax({
                type: "POST",
                url: url,
                data: {parentid:parentid,articleid:articleid},
                success: function(data){
                   $("#A"+right_id+'-'+child+"_id").val(data);
                   $("#"+main_id+"-"+child).click();
                }
            });


        }
        //======删除子章节
        // 删除 子目录
        function  dele_zi(th){

            var  this_id  =  $(th).attr('data-id');//删除元素的id  左边

            var  this_right_id   = this_id.replace("M",'A');  //  配置 右边的id 值

             //获取 articleid
            var  articleid    =$("#"+this_right_id+'_id').val();

            var  url  =SITEURL+"article/ajax_del_zimulu";

            layer.confirm('确定要删除吗？', {
                btn: ['确定','取消'] //按钮
            }, function(){
                $("#"+this_id).remove();
                $("#"+this_right_id).remove();
                $.ajax({
                    type: "GET",
                    url: url,
                    data: {articleid:articleid},
                    success: function(data) {
                        if (data) {
                            layer.msg('删除成功', {
                                time: 2000, //20s后自动关闭
                                btn: ['确定']
                            });
                        }
                    }
                });


            });

        }
//============================================================fengjingchun
        //设置模板
        function setTemplet(obj)
        {
            var templet = $(obj).attr('data-value');
            $(obj).addClass('on').siblings().removeClass('on');
            $("#templet").val(templet);
            if(templet=='moban2'){
                $('#gf_content').show();
                $('#bz_content').hide();
            }else{
                $('#gf_content').hide();
                $('#bz_content').show();
            }

        }
	$(document).ready(function(){

        $("#nav").find('span').click(function(){

            Product.changeTab(this,'.product-add-div','#btn_saves');//导航切换   09.02  加入 参数ml_20 封冀蜀
        })
        $("#nav").find('span').first().trigger('click');


        var action = "{$action}";
        //上传图片

        $('#pic_btn').click(function(){
            ST.Util.showBox('上传图片', SITEURL + 'image/insert_view', 430,340, null, null, document, {loadWindow: window, loadCallback: Insert});
            function Insert(result,bool){
                var len=result.data.length;
                for(var i=0;i<len;i++){
                    var temp =result.data[i].split('$$');
                    Imageup.genePic(temp[0],".up-list-div ul",".cover-div");
                }
            }
        })
        //pdf附件
        setTimeout(function(){
            $('#attach_btn').uploadify({
                'swf': PUBLICURL + 'js/uploadify/uploadify.swf',
                'uploader': SITEURL + 'uploader/uploaddoc',
                'buttonImage' : PUBLICURL+'images/uploadfile.png',  //指定背景图
                'formData':{uploadcookie:"<?php echo Cookie::get('username')?>"},
                'fileTypeExts':'*.pdf',
                'auto': true,   //是否自动上传
                'removeTimeout':0.2,
                'height': 25,
                'width': 80,
                'onUploadSuccess': function (file, data, response) {


                    var info=$.parseJSON(data);
                    var html = '<a href="'+info.path+'" target="_blank">查看附件</a>&nbsp;';
                    $("#attachment").val(info.path);
                    if(action=='edit')
                        html+= '<a href="javascript:;" onclick="delAttach()">删除</a>'
                    $("#doclist").html(html);

                }
            });
        },10)



        //保存
        $("#btn_save").click(function(){

               var articlename = $("#articlename").val();

            //验证名称
             if(articlename==''){
                   $("#nav").find('span').first().trigger('click');
                   $("#articlename").focus();
                   ST.Util.showMsg('请填写文章名称',5,2000);
               }
               else
               {
                   Ext.Ajax.request({
                       url   :  SITEURL+"article/ajax_save",
                       method  :  "POST",
                       isUpload :  true,
                       form  : "product_frm",
                       datatype  :  "JSON",
                       success  :  function(response, opts)
                       {

                           var data = $.parseJSON(response.responseText);
                           if(data.status)
                           {
                               if(data.productid!=null){
                                   $("#productid").val(data.productid);
                               }
                               ST.Util.showMsg('保存成功!','4',2000);
                           }


                       }});
               }

        })
        //================fengjishu
        //保存
        $("#btn_saves").click(function(){

            var articlename = $("#articlename").val();

            //验证名称
            if(articlename==''){
                $("#nav").find('span').first().trigger('click');
                $("#articlename").focus();
                ST.Util.showMsg('请填写文章名称',5,2000);
            }
            else
            {
                Ext.Ajax.request({
                    url   :  SITEURL+"article/ajax_saves",
                    method  :  "POST",
                    isUpload :  true,
                    form  : "product_frm",
                   // datatype  :  "JSON",
                    success  :  function(response, opts)
                    {

                        var data = $.parseJSON(response.responseText);
                       

                        if(data)
                        {

                            ST.Util.showMsg('保存成功!','4',2000);

                        }


                    }});
            }

        })


        //如果是修改页面


        {if $action=='edit'}



            var litpic = $("#litpic").val();
            $(".img-li").find('img').each(function(i,item){

                        if($(item).attr('src')==litpic){
                            var obj = $(item).parent().find('.btn-ste')[0];
                            Imageup.setHead(obj,i+1);
                        }
            })



            var piclist = ST.Modify.getUploadFile({$info['piclist_arr']});

            $(".pic-sel").html(piclist);
            var litpic = $("#litpic").val();
            $(".img-li").find('img').each(function(i,item){

                if($(item).attr('src')==litpic){
                    var obj = $(item).parent().find('.btn-ste')[0];
                    Imageup.setHead(obj,i+1);
                }
            })
            window.image_index= $(".pic-sel").find('li').length;//已添加的图片数量

        {/if}






     });

     function showpic()
     {
         $("#updiv").show();
     }
     function unshowpic()
     {
         $("#updiv").hide();
     }

     function delAttach()
     {
                var articleid = '{$info['id']}';
                $.ajax({
                    type:'POST',
                    url:SITEURL+'/article/ajax_del_attach',
                    data:{articleid:articleid},
                    dataType:'json',
                    success:function(data){
                        if(data.status){
                            $("#doclist").html('');
                            ST.Util.showMsg('删除成功',4,1000);

                        };
                    }
                })
      }



    </script>

</body>
</html>
