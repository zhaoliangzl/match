<?php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>图片上传</title>
<style type="text/css">
#preview{width:260px;height:190px;border:1px solid #000;overflow:hidden;}
#imghead {filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);}
</style>
<script type="text/javascript">


//ͼƬ�ϴ�Ԥ��    IE�������˾���
function previewImage(file)
{
    var MAXWIDTH  = 260;
    var MAXHEIGHT = 180;
    var div = document.getElementById('preview');
    if (file.files && file.files[0])
    {
        div.innerHTML ='<img id=imghead>';
        var img = document.getElementById('imghead');
        img.onload = function(){
            var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
            img.width  =  rect.width;
            img.height =  rect.height;
            //                 img.style.marginLeft = rect.left+'px';
            img.style.marginTop = rect.top+'px';
        }
        var reader = new FileReader();
        reader.onload = function(evt){img.src = evt.target.result;}
        reader.readAsDataURL(file.files[0]);
    }
    else //����IE
    {
        var sFilter='filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale,src="';
        file.select();
        var src = document.selection.createRange().text;
        div.innerHTML = '<img id=imghead>';
        var img = document.getElementById('imghead');
        img.filters.item('DXImageTransform.Microsoft.AlphaImageLoader').src = src;
        var rect = clacImgZoomParam(MAXWIDTH, MAXHEIGHT, img.offsetWidth, img.offsetHeight);
        status =('rect:'+rect.top+','+rect.left+','+rect.width+','+rect.height);
        div.innerHTML = "<div id=divhead style='width:"+rect.width+"px;height:"+rect.height+"px;margin-top:"+rect.top+"px;"+sFilter+src+"\"'></div>";
    }
}
function clacImgZoomParam( maxWidth, maxHeight, width, height ){
    var param = {top:0, left:0, width:width, height:height};
    if( width>maxWidth || height>maxHeight )
    {
        rateWidth = width / maxWidth;
        rateHeight = height / maxHeight;
         
        if( rateWidth > rateHeight )
        {
            param.width =  maxWidth;
            param.height = Math.round(height / rateWidth);
        }else
        {
            param.width = Math.round(width / rateHeight);
            param.height = maxHeight;
        }
    }
     
    param.left = Math.round((maxWidth - param.width) / 2);
    param.top = Math.round((maxHeight - param.height) / 2);
    return param;
}
</script>
</head>
<body>
<div id="preview">
<img id="imghead" width=100 height=100 border=0 src='<%=request.getContextPath()%>/images/defaul.jpg'>
</div>
<form action="">

<input type="file" onchange="previewImage(this)" />
</form>
</body>
</html>

b1--植物摄影以植物为拍摄对象的摄影技术.包括植物群落摄影、植物体摄影、植物标本切片摄影等.对植物的局部进行特写摄影时，应采取近拍技术，并要使用近拍镜.为达到特殊的效果，应有目的地选用胶片和滤色镜.在拍摄野外植物群体时，尽可能选在晴好的天气时拍摄，使用半侧光、小光圈拍摄，这样可以得到层次好，景深清楚的照片。光线的运用 植物摄影 光线决定着植物照片的成败。植物摄影师最喜欢明亮的多云天气，这时光线很柔和，阴影也不会太生硬。

b2--花粉覆盖的蜜蜂复眼，120x

这张赢得冠军的显微照片看起来对密恐患者不太友好，不过它呈现的细节确实令人惊叹。它捕捉到了蒲公英花粉覆盖下欧洲蜜蜂（Apis mellifera）精细的复眼结构。

蜂是生态环境中重要的一环，在人类的生活中，蜜蜂也扮演着重要的角色，人们利用蜂产品的历史现在已经可以追溯到9000年前。对于摄影师和生物学家而言，蜜蜂都是值得悉心观察的对象。

这张图片利用反射光显微镜拍摄，作者拉尔夫•克劳斯•格林（Ralph Claus Grimm）是一位高中教师，同时他还是自学成才的显微摄影师和曾经的养蜂人，对他来说，拍摄这样一幅作品可谓是再合适不过了。为获得最佳效果，他用了四个多小时的时间小心翼翼地摆放样品，不断地调整焦距，才得以得到如此精美的图片。

“通过该照片，我们从蜜蜂的眼中看到了这个奇妙世界的一个缩影，”格林说，“这不仅仅是一件伟大的自然之作，而且还是一个警示——我们应该时刻关注我们生存的这个星球，去聆听像蜜蜂一样的似乎微不足道生物，然后去保护这个美丽的星球。”[1]

拍摄者：Ralph Claus Grimm Jimboomba, Queensland, Australia

作者：FranklinWhite、  fengfeixue0219 
链接：http://www.guokr.com/article/440943/
来源：果壳
本文版权属于果壳网（guokr.com），禁止转载。如有需要，请联系sns@guokr.com
b3--摄食中的丝叶狸藻，100X

图中这个外形诡异的家伙看起来像是某种张开血盆大口的妖怪，而它真实的身份其实是共聚焦显微镜下丝叶狸藻（Utricularia gibba ，humped bladderwort）的捕虫囊。

丝叶狸藻是一种水生食虫植物，它们有着十分特别的捕虫方式：它的捕虫囊外侧具有灵敏的触毛，当水中小型的节肢动物碰触到这些触毛时，捕虫囊会突然膨胀，，形成负压，并开启捕虫囊的“袋口”，将小虫吸进囊中。图中所示的就是一个张开了“血盆大口”的捕虫囊。外侧长长的结构就是触毛，而内侧顶端球形的，则是能分泌消化酶的腺毛。

作者：FranklinWhite、  fengfeixue0219 
链接：http://www.guokr.com/article/440943/
来源：果壳
本文版权属于果壳网（guokr.com），禁止转载。如有需要，请联系sns@guokr.com
b4--　优质水藻展现令其内部显现红色的天然色素——虾青素。水藻每一个都是直径约为40微米的单细胞。由这种藻类细胞生成的虾青素被用于制作橙红色的颜色。美国华盛顿州伊萨夸市专业摄影师查尔斯·克莱布斯(Charles Krebs)利用相衬显微镜技术，捕捉到取自室外池塘的水藻样本的照片。
   拟南芥花 
b5--　　海蒂·帕维斯(Heiti Paves)用显微技术制作的拟南芥花的照片。 
b6--如图所示，这是显微照片呈现的从簇状神经干细胞中提取的不成熟神经细胞，它也被称为“神经球”，科学家利用这种特殊球状细胞来模拟神经发育。
b7--放大200倍的链孢霉作者：埃里克·卡尔曼(Eric Kalkman)作品名称：暴露于红海海绵素B的链孢霉(200倍)工作单位：瓦格宁根大学植物病理学实验室拍摄地点：荷兰瓦格宁根所用技术：共焦