# Smarty-Study
Smarty Study

## 基础

```
//设置模板目录
$smarty->setTemplateDir('./Views');
//设置编译目录
$smarty->setCompileDir('./runtime/Compile');
//设置配置文件路径
$smarty->setConfigDir('./Config');
//设置插件地址
$smarty->setPluginsDir('./Plugins');
//设置cache地址
$smarty->setCacheDir('./runtime/Cache');
//配置缓存
$smarty->caching = false;
//配置缓存时间
$smarty->cache_lifetime = 60*60*24;
//设置左右标识符
$smarty->left_delimiter='{';
$smarty->right_delimiter='}';
```

## 简单使用

```
//分配变量
$smarty->assign('username','dollarkiller-data');
$smarty->assign('age',20);
//of
$smarty->assign([
    'username'=>'dollarkiller',
    'age'=>20
]);
//显示
$smarty->display('smarty.html');
```

>Smarty服务端开发

- Smarty引擎
- 变量分配个加载显示模板
- 以插件形式扩展Smarty
- 缓存控制

>Smarty前端部分

- 缓存控制
- 模板语法
- 变量,变量修改器和组合修改器
- 自定义函数
- 内置函数
- 模板继承

>服务端开发常用方法

- assign 为模板分配变量 可以传入任意数据类型
- display(tmp,cache_id,compile_id) 控制显示

>模板注释

```$xslt
{* this is a comment *} 忽略解析
<!--{$uerename}-->  会解析在HTML不会显示
```

>模板变量

- 索引数组:{$arr[0]}
- 关联数组:{$arr.username}
- 对象:{$obj->getUsername()}
- 直接在模板定义变量 {$var = 100} 就是在{里面}可干很多事

$开头蛤
主意啊 { $var } 左右有空格就不会被解析啊

>前端开发部分保留变量

- {$smarty.get.page}
- {$smarty.post.page}
- {$smarty.cookies.username}
- {$smarty.server.SERVER_NAME}
- {$smarty.env.PATH}
- {$smarty.session.id}
- {$smarty.request.username}
- {$smarty.now}

>前端开发部分配置变量的使用

配置文件中变量需要两个#包围
OR 使用Smarty保留变量$smarty.config.来调用

- 在config目录下创建一个*.conf文件
- 加载,{config_load file='foo.conf}
- 调用 {#bodyBgColler#} or {$smarty.config.pageTitle}

## 流程控制
- {if}
- {for}
```
{for $i=0 to 5 [max=最大循环] [step 步长]}
{forelse}
    no loop
{/for}
```
- {while}
- {foreach}
```
{foreach $arr as $key => $value}
        {$key}:{$value}
            {break}
            {continue}
        {$value@index}
        {$value@key}
        {$value@total}
        {$value@show}
        {$value@first}
        {$value@last}
    {foreachelse}
        data does not exist
    {/foreach}
```
- {section} 遍历数组

## 前端常用标签函数
- assign  定义变量
```
    {assign var="name" value="Jason"}
    OR
    {assign "name" "Dollar Killer"}
    <h1>{$name}</h1>
```
- append
```
    {append var="arr1" value="5"  index="4"}
    先数值中增加值 目标Array arr1 值5 索引4
```
- ldelim
- rdelim
```
    {ldelim}$name{rdelim}
    原样输出不会被解析
    {$name} 
```
- include
```
    {include file='loop.html'}
    加载外部html模板  加载头or尾巴 侧边栏 导航
```
- html_checkboxes
```
    {html_checkboxes name='hobby' values=$hobby_ids output=$hobby_output}
    复选框 name 复选框名称 
    注意这个可能会引发插件问题
    修改setPluginsDir 为 addPluginsDir
```
- html_image
```
        {html_image width="690" height="388" alt="DollarkILLER" href='https://github.com/dollarkillerx' file="https://upload-images.jianshu.io/upload_images/11692305-3bffdaaf46cf2e9e.jpeg"}
```
- html_options
```
        {html_options name='hobby' values=$hobby_ids output=$hobby_output}
        下拉查单
        属性 selected=1 默认选中
        语法和html_checkboxes类似
```
- html_radios
```
        {html_radios name='radio' options=$options}
        单选框
        语法和html_checkboxes类似
```
- html_select_date
```
    {html_select_date}
    年月日 日期选择
```
- html_select_time
```
   {html_select_time}
   时间选择     
```
- html_table
```
    {html_table loop=$arr1 cols=2 rows=3}
```
- mailto
```
    {mailto address="dollarkiller@d.com" subject="title" text='显示内容' cc='抄送内容'}
    邮件
```
- math
```
    {math equation="x + y" x = 100 y = 200}
    数学计算
```

###### 对于html_radios html_options html_checkboxes
```
$smarty->assign('options',[
    1=>'看书',
    2=>'追番',
    3=>'code',
    4=>'听书',
    5=>'二次元',
]);
{html_options name='hobby' options=$options }
options=$options 就可以用写vulues optput了
```

## 前端开发部分变量修饰器

- capitalize
```
    {$str='123thIs is string'}
    {$str|capitalize:false:true}
    首字母大写
    :单词有数字是否也要大写
    ::是否保证只有首字母大写
```
- cat
```
    {$str|cat:'hero'}
    添加内容
    注释:如果要多个变量修饰去工作{$str|修饰器|修饰器|修饰器}
```
- count_characters
- count_paragraphs
- count_sentences
- count_words
```
    {$str|count_characters}
    count_characters 统计字母
    count_paragraphs 统计段落
    count_sentences  统计句子
    count_words      统计单词
```
- default
```
    {$str2|default:'Not Data'}
    默认值
```
- date_format
```
    {time()|date_format:"%y-%m-%D %H-%M-%S"}
    模板字符串
```
- from_charset
``` 
    {$chinese = '中文'}
    {$chinese|from_charset:"utf-8"|to_charset:"gb2312"}
    转码
```
- indent
``` 
    {$str|indent:10:"/"}
    缩进 默认4个 默认空格
```
- lower
- upper
``` 
    {$str|lower}
    lower全部转成小写
    upper全部大写
```
- nl2br
``` 
    {$str2="this is p1.\n This is p2."}
    {$str2|nl2br}
    转义
```
- regex_replace
``` 
    {$str|regex_replace:"/\d+/":" "}
    正则替换
```
- replace
```
    {$str|replace:"123123":'0000'}
    替换
```
- spacify
```
    间隔 默认是空格
    {$str|spacify:'-'}

```
- string_format
``` 
    {$float='10.0000051511'}
    {$float|string_format:'%.2f'}
```
- strip
``` 
    {$str3='a     b     c     d    f    '}
    {$str3|strip:'/'}
    多个空格变成一个
```
- strip_tags
``` 
    {$tag ='<b>Font</b>'}
    {$tag|strip_tags}
    去掉html php 等标签
```
- to_charset
- truncate
``` 
    {$bigstr='asd484f84sdf8ddsf8sdf48sdf4sd8f4sd8f4sd8f4er8g4vre8g4er8g4er8g4er8g4s56g4sd8g4wer/89'}
    {$bigstr|truncate:10:'--':true}
    截取多出的默认是'--'  按照字符截取
```
- escape/unescape
``` 
    {$tag|escape}
    把标签转成实体，原样输出
    unescape
    转会
```
- wordwrap
```
    {$bigstr|wordwrap:10:"\n":true}
    折行处理
```

## 前端部分块状函数
- nocache
```
    不缓存
    {nocache}   
    {/nocache}
```
- textformat
```
    {textformat indent='4' indent_first='10' indent_char='=' wrap='45' wrap_char='<hr>' wrap_cut=ture assign='war'}
     centent
    {/textformat}
    {$war}
```

# Smarty插件的开发
- 使用registerPlugin()方法扩充插件格式
```
    registerPlugin("function/modifier/block",'模板函数名','自定义的函数名称')
    
    //注册func
    $smarty->registerPlugin('function','font',function ($attributes){
       $text = $attributes['text'];
       $color = $attributes['color'] ?? 'black';
       return '<span style="color:'.$color.'">'.$text.'</span>';
    });
    //注册变量修饰器
    $smarty->registerPlugin('modifier','link',function ($text,$href,$isCapitalize=false){
        if (!$isCapitalize){
            return '<a href="'.$href.'">'.$text.'</a>';
        }else{
            return '<a href="'.$href.'">'.strtoupper($text).'</a>';
        }
    });
    //注册块状函数
    $smarty->registerPlugin('block','link',function ($attributes,$text){
        $href = $attributes['href'];
        if (!is_null($text)){
            return '<a href="'.$href.'">'.$text.'</a>';
        }
    });

```
- 在smarty模板的lib/plugins/目录下创建函数插件文件
    - modifier.调节器名.php
    - function.标签名称.php
    - block.块函数名称.php
```
    function smarty_function_font($attributes)
    {
        $text = $attributes['text'];
        $color = $attributes['color'] ?? 'black';
        return '<span style="color:' . $color . '">' . $text . '</span>';
    }
    文件放到Plugins下 文件夹命名 block|function|modifier.函数名称.php
    方法命名 smarty_function|block|modifier_函数名称()
```

## 缓存

- $smarty->caching = 1|2|0;
    - 1 全局缓存 缓存时长相同
    - 2 在display 针对每个模板设定不一样的时长
    - 0 关闭缓存
- $smarty->setCacheDir("./cache");
- $smarty->setCacheLifetime(300);//以秒为单位,-1永不过期
```
$smarty->display('index.tpl');//调用display就会生成缓存
$smarty->display('index.tpl',$_SERVER['REQUEST_URL']);//第二个参数为ID可以更具url的不同生成不同的缓存文件
```
>相关函数

- isCached()  //查看是否被缓存
- clearCache()  //清除缓存
- clearAllCache()  //清楚所有缓存
```
    //if没有被缓存就查询 并且分配
    if (!$smarty->isCached('plugins.html',$_SERVER['REQUEST_URI'])){
        echo 'SELECT * FROM DATABASE';
        //数据库查询
        $data= [];
        $smarty->assign('text','This is a para');
    
        //显示
        //$smarty->display('smarty.html',1,2);
        //$smarty->display('loop.html');
        //$smarty->display('tag_func.html');
        //$smarty->display('modifier.html');
        //$smarty->display('bloock_func.html');
        $smarty->assign('users',$data);
    }
    
    //清理缓存
    $smarty->clearCache('plugins.html',$_SERVER['REQUEST_URI']);
    $smarty->clearAllCache()
    
```

>cache模板函数

- {nocache}...{/nocache}
- {$time | date_format nocache}
```
    {time()|date_format:"%H:%M:%S" nocache}
    {nocache}
        code...
    {/nocache}
```
