# 轻松部署 Laravel 应用

[![](https://travis-ci.com/wi1dcard/laravel-deployment.svg?branch=master)](https://travis-ci.com/wi1dcard/laravel-deployment)
[![](https://img.shields.io/github/stars/wi1dcard/laravel-deployment.svg)](https://github.com/wi1dcard/laravel-deployment)

项目开发完成，如何向世界展示你的作品？必不可少的一步就是 **部署**。

实际上，目前国内大多创业型公司，对于程序员技能树的要求少不了部署。除了编写高效稳定的代码外，你还需要将这份代码快速、安全地部署到线上以供演示和交付等。这对于长期与 Laravel 和 PHP 打交道的开发者来说确实存在一些门槛：

- 虚拟主机还是云服务器？规格眼花缭乱，我该怎么选？
- 一键脚本还是手动部署？
- 一键脚本都做了什么？如何手动部署？
- 有没有办法简化上述过程？
- 出现故障怎么办？如何快速回滚版本？

我早期一直从事 PHP 开发工作，之后转型运维。对于以上问题我曾经也感到十分疑惑，在这个「痛苦」的学习过程中，我发现多数 PHP 程序员对部署并不熟悉；就像「隔行如隔山」，原本十分简易的流程，大家还在用着陈旧的工具、读着过时的教程，最终让部署成了一件难事儿。

故本课程内，我将尽全力降低对于运维以及 Shell 专业知识的要求，以尽可能贴近国内 PHP 工程师的方式讲述部署过程。读者可跟随课程描述，边学习边操作，快速了解整套流程，一步一步地实现发布上线。

同时，我将尝试多种部署方式。在这个过程中，你将感受到不同方案带来的优势，同时也不可避免地存在一些缺点，希望大家能够结合自身情况和实际需求，记住 **适合即最优**。

## 约定

在本课程中，若代码块的行首字符为 `$`，表示这是一行需要在命令行内执行的语句，例如：

```bash
$ echo "Hello deployment!"
```

在本课程中，我将使用以下命令创建一个示例应用作为演示项目：

```bash
$ laravel new hello-deployment
```

## 其它

- 更新节奏：不固定，业余时间写作。暂时计划 1-2 天每篇。
- 本课程将不再赘述云服务购买等 **基础且具备商业支持** 的步骤，如有疑问可参考 [本文](https://wi1dcard.cn/posts/cloud-infrastructures)。

## 开始阅读

[![](https://img.shields.io/badge/Available%20on-Laravel--China-brightgreen.svg)](https://learnku.com/blog/wi1dcard)
