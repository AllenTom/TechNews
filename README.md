# TechNews
---  
[![Travis](https://img.shields.io/travis/rust-lang/rust.svg)]()
[![Packagist](https://img.shields.io/packagist/l/doctrine/orm.svg)]()  
新闻发布系统
## 使用了什么 ##
1. 使用PHP开发
2. 基于[thinkphp](http://www.thinkphp.cn) 开发
3. 前端使用的是[bootstrap4](https://getbootstrap.com)
4. 后台使用的是[AmazeUI](http://amazeui.org/)
## 注意事项 ##
1. 使用前请先设置Salt安全，详见[config.php](https://github.com/AllenTom/TechNews/blob/master/application/config.php)
2. 其他设置，例如数据库，token过期时间都在config中，设置方法详见thinkphp文档以及文件内注释
3. 部署前请检查文件权限，否则可能会造成因权限不足造成的文件上传错误
## TODO ##
1. Model验证和Controller验证
2. 更好看的UI
## License(MIT) ##
Copyright 2017 TakayamaAren aka AllenTom

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
