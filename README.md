﻿# Hashyoo 3DES

Hashyoo 3DES加密解密，使用openssl，必须有openssl扩展

### 安装方法 ###

```php
composer require hashyoo/des3
```

### 配置方法 ###

配置加密key和iv,如下。也可动态使用key和iv

```php
config文件夹下创建hashyoo-des3.php
php artisan vendor:publish --provider="HashyooDes3\Providers\Des3Provider"
```

### 使用方法 ###


```php
<?php

namespace App\Http\Controllers;

use HashyooDes3\Facade\Des3;
class IndexController extends Controller
{
    public function index()
    {
        // 加密
        $encrypt = DES3::encrypt(111);
        echo $encrypt;

        // 解密
        $decrypt = DES3::decrypt($encrypt);
        echo $decrypt;
        
        // 动态使用
        $key = 'ABCDEFGHIJKLMNOPQRSTUVWX';
        $iv =  '12345678';
        DES3::encrypt(111, $key,$iv);
        DES3::decrypt($encrypt, $key, $iv);
    }
}

```

