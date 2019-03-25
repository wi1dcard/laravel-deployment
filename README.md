# 轻松部署 Laravel 应用

[![](https://travis-ci.com/wi1dcard/laravel-deployment.svg?branch=master)](https://travis-ci.com/wi1dcard/laravel-deployment)
[![](https://img.shields.io/github/stars/wi1dcard/laravel-deployment.svg)](https://github.com/wi1dcard/laravel-deployment)

## 如何阅读

你可以在 [![](https://img.shields.io/badge/Available%20on-Laravel--China-brightgreen.svg)](https://learnku.com/blog/wi1dcard) 查看我的博客，亦可 [![](https://img.shields.io/badge/Available%20on-GitHub-brightgreen.svg)](https://github.com/wi1dcard/laravel-deployment/tree/master/src) 阅读源代码。

## 简介

项目开发完成，如何向世界展示你的作品？必不可少的一步就是 **部署**。

实际上，目前国内大多创业型公司，对于程序员技能树的要求少不了部署。除了编写高效稳定的代码外，你还需要将这份代码快速、安全地部署到线上以供演示和交付等。这对于长期与 Laravel 和 PHP 打交道的开发者来说确实存在一些门槛：

- 宝塔面板？一键包？手动部署？
- 一键脚本都做了什么？怎样手动部署？
- 有没有办法简化上述过程？
- 出现故障怎么办？如何快速回滚版本？
- ...

我早期一直从事 PHP 开发工作，对于以上问题曾经也感到困惑；近期转型运维向，在这个「痛苦」的学习过程中，我发现多数 PHP 程序员对部署并不熟悉；就像「隔行如隔山」，原本十分简易的流程，大家还在用着陈旧的工具、读着过时的教程，最终让部署成了一件难事儿。

## 目的

本课程内，我将尽全力降低对于运维以及 Shell 专业知识的要求，以尽可能贴近国内 PHP 工程师的方式讲述部署过程。读者可跟随课程描述，边学习边操作，快速了解整套流程，一步一步地实现发布上线。

同时，我将尝试多种部署方式。在这个过程中，你将感受到不同方案带来的优势，同时也不可避免地存在一些缺点，希望大家能够结合自身情况和实际需求，记住 **适合即最优**。

## 知识点

上线 Laravel 项目，在技术层面基本可以分为三大步骤：

1. 安装运行环境
2. 配置运行环境
3. 部署应用代码

以及可选项：

4. 更新应用
5. 回滚应用

预期大纲：

- [*] 常见一键 Web 面板
- [*] 常见一键配置脚本
- [*] 手动安装 Git、Nginx、Composer、PHP、PHP-FPM
- [ ] Envoy
- [ ] Deployer
- [ ] Ansible
- [ ] Terraform
- [ ] Lexicon
- ...

## 目录结构

```
.
├── README.md --------- 导语
├── helpers ----------- 辅助脚本目录（无需关注）
│   ├── deploy
│   ├── image
│   └── lint
└── src --------------- 实际课程目录
    ├── *.md ---------- Markdown 格式的文章
    ├── ...
    └── images -------- 图片目录
        ├── *.png ----- 截图、插图等
        └── ...
```

## 约定

在本课程中，若代码块的行首字符为 `$`，表示这是一行需要在命令行内执行的语句，例如：

```bash
$ echo "Hello deployment!"
```

在复制或输入时，请去掉开头的 `$`。

在本课程中，将使用以下命令创建一个示例应用作为演示项目：

```bash
$ laravel new hello-deployment
```

在本课程中，如无特殊说明，将采用 `Ubuntu Bionic 18.04 LTS` 作为服务器系统。

## 其它

常见注意事项如下：

- 更新节奏不固定，业余时间写作。暂时计划 1-2 天每篇。
- 本课程将不再赘述云服务购买等 **基础且具备商业支持** 的步骤，如有疑问可参考 [本文](https://wi1dcard.cn/posts/cloud-infrastructures)。
- 在开始学习前，请先了解一些基本概念，例如「什么是 Linux」、「Nginx 是干嘛的」。
- 对于 MySQL、Redis、ElasticSearch 等组件的安装与调优不在本课程的大纲范围内，建议使用现成的云服务。

## 贡献

如有任何建议或意见请 [提交 Issue](https://github.com/wi1dcard/laravel-deployment/issues/new) 指出，感谢您的关注。
