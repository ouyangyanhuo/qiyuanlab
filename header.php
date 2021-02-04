<?php header("Access-Control-Allow-Origin: https://www.kpan.me"); ?>
<!DOCTYPE html>
<html class="loading" lang="zh-cn" data-textdirection="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Magneto and KuWan for Origin Lab Project.">
    <title>起源实验室</title>
	<meta name="description" content="起源 Web实验室是源·燕实验室的全新版本，起源实验室用于陈列一些幸吾有志原创作品、收集的一些网页特效，以及其它的好玩的内容，并且孵化全新的产品">
    <meta name="keywords" content="起源 Web实验室,起源 网页实验室.起源,Origin Web实验室,Origin 网页实验室,Origin,Web实验室,缘力君,前端实验室,源·燕">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/google-material-design-icons@1.0.0/icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@3.6.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="./System/css/animate.css">
    <link rel="stylesheet" type="text/css" href="./System/css/jquery.dataTables-3.css">
    <link rel="stylesheet" type="text/css" href="./System/css/fonts-zh-cn.min.css">
    <link rel="stylesheet" type="text/css" href="./System/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="./System/css/style.min-1.css">
    <link rel="stylesheet" type="text/css" href="./System/css/data-tables.min.css">
    <link rel="stylesheet" type="text/css" href="./System/css/custom.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"/>
  </head>
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed">
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-blue no-shadow">
          <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down">
                <i class="material-icons">search</i>
              <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="通过项目名称搜索" autocomplete="off">
              <ul class="search-list collection display-none"></ul>
            </div>
            <ul class="navbar-list right">
              <li class="hide-on-large-only search-input-wrapper">
                  <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                      <i class="material-icons">search</i>
                  </a>
              </li>
              <li class="hide-on-large-only">
                  <a href="https://bbs.mokeedev.com/t/topic/9551/1" target="_blank" class="waves-effect waves-block waves-light action-button">
                      <i class="material-icons">group_add</i>
                  </a>
              </li>
              <li>
                  <a href="https://www.teendreams.cn" target="_blank" class="waves-effect waves-block waves-light forum-button">
                      <i class="material-icons hide-on-large-only">forum</i>
                      <span class="hide-on-med-and-down">年少之梦论坛</span>
                  </a>
              </li>
              <li class="hide-on-med-and-down">
                  <a href="javascript:void(0)" class="dropdown-settings waves-effect waves-light right action-button" data-target="group-list">
                      <i class="material-icons hide-on-large-only">group</i>
                      <span class="hide-on-med-and-down">社交群组</span>
                      <i class="material-icons right hide-on-med-and-down">arrow_drop_down</i>
                  </a>
              </li>
              <li class="hide-on-med-and-down">
                  <a href="javascript:void(0)" class="dropdown-settings waves-effect waves-light right action-button" data-target="contribute-list">
                      <i class="material-icons hide-on-large-only">favorite</i>
                      <span class="hide-on-med-and-down">提交贡献</span>
                      <i class="material-icons right hide-on-med-and-down">arrow_drop_down</i>
                  </a>
              </li>
            </ul>
            <ul id="group-list" class="dropdown-content">
              <li><a class="grey-text text-darken-2" href="https://jq.qq.com/?_wv=1027&k=7yom0nyO" target="_blank">QQ群</a></li>
              <li><a class="grey-text text-darken-2" href="https://www.symbk.cn/comments/" target="_blank">留言板</a></li>
            </ul>
            <ul id="contribute-list" class="dropdown-content">
              <li><a class="grey-text text-darken-2" href="https://www.symbk.cn/" target="_blank">博客</a></li>
              <li><a class="grey-text text-darken-2" href="./Plugin/JumpQQ/index.html?2357307393" target="_blank">代码改进</a></li>
            </ul>
          </div>
          <nav class="display-none search-sm hide-on-large-only">
            <div class="nav-wrapper">
              <form id="navbarForm">
                <div class="input-field search-input-sm">
                  <input class="search-box-sm mb-0" type="search" required="" id="search" autocomplete="off">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label>
                  <i class="material-icons search-sm-close">close</i>
                  <ul class="search-list collection search-list-sm display-none"></ul>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>
    <!-- BEGIN: SideNav-->
    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper">
          <a class="brand-logo darken-1" href="/">
            <img class="hide-on-med-and-down" src="./System/images/logo/loen.png" alt="materialize logo" />
            <img class="show-on-medium-and-down hide-on-med-and-up" src="./System/images/logo/loen.png" alt="Lab logo" />
            <span class="logo-text hide-on-med-and-down">起源实验室</span>
          </a>
        </h1>
      </div>
      
      
<!-- Hader.php-->