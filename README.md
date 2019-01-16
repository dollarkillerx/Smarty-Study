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


