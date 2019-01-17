# Smarty-Study
Smarty Study

>基础

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

>简单使用

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

>流程控制
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

>前端常用标签函数
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