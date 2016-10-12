
# zhuyicms
住艺v1.0项目H5网站和后台系统


# 项目简介

<br />官网 H5 页面地址：http:www.zhuyihome.com  
<br />后台地址：http:www.96zy0ba.zhuyihome.com 


# 改进目标

<br />继续细化各领域的技能节点
<br />提供各领域的参考学习路径
<br />推荐各知识点相关优质资源

# 版本信息

v 1.0.2 2016-9-13

<br />数据统计
<br />后台订单优化
<br />设计师列表优化
<br />用户列表优化
<br />增加搜索管理

一，使用YII2框架后台bckend/

二，安装方法

cd zhuyicms
php init
composer config -g repo.packagist composer https://packagist.phpcomposer.com
composer install
composer update

三，修改代码
path: zhuyicms\vendor\yiisoft\yii2\base\Model.php


 public function load($data, $formName = null)
    {
        $scope = $formName === null ? $this->formName() : $formName;
        if ($scope === '' && !empty($data)) {
            $this->setAttributes($data, FALSE);
            return true;
        } elseif (isset($data[$scope])) {
            $this->setAttributes($data[$scope],FALSE);
            return true;
        } else {
            return false;
        }
    }
    
 四，修改 /zhuyicms/vendor/mdmsoft/yii2-admin/controllers/AssignmentController.php
 public $usernameField = 'user_name';
 
 五，/zhuyicms/frontend/config/params.php     修改前端指定域名
return [
    'frontDomain' => 'httP://zytest.zhuyidesign.com',
];

六，/zhuyicms/frontend/controllers/UserController.php
public function actionLogin() {   微信登录修改回调链接


Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```
