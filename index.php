<?php include("header.php"); ?>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <!--主导航名称S-->
        <li class="navigation-header">
            <a class="navigation-header-text">导航</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <!--主导航名称E-->
        <!--主导航内容S-->
            <li class="bold active">
                <a class="waves-effect waves-cyan active" href="./">
                    <i class="material-icons">home</i>
                    <span class="menu-title">首页</span>
                </a>
            </li>
            <li class="bold">
                <a class="waves-effect waves-cyan" href="./Update_history.php">
                    <i class="material-icons">track_changes</i>
                    <span class="menu-title">更新日志</span>
                </a>
            </li>
            <?php include("Developer_header.php"); ?>
        <!--主导航内容E-->
        <!--分导航名称S-->
        <li class="navigation-header">
            <a class="navigation-header-text">项目</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <!--分导航名称E-->
        <!--分导航内容S-->
            <!--按钮1S-->
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons"></i><span class="menu-title">实用</span>
                </a>
                <!--按钮1_分S-->
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="collapsible-body" href="./Img.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">图床</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Wallpaper.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">电脑壁纸</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Expreesion.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">云表情</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <!--按钮1_分E-->
            <!--按钮2S-->
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons"></i><span class="menu-title">娱乐</span>
                </a>
                <!--按钮2_分S-->
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="collapsible-body" href="./OneSpeak.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">一言</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Ancient_poetry.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">古诗词</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Poisonous_chicken_soup.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">毒鸡汤</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Joke.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">笑话</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Baidu.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">不会百度吗</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <!--按钮2_分E-->
            <!--按钮3S-->
            <li class="bold">
                <a class="collapsible-header waves-effect waves-cyan">
                    <i class="material-icons"></i><span class="menu-title">实用</span>
                </a>
                <!--按钮3_分S-->
                <div class="collapsible-body">
                    <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="">
                        <a class="collapsible-body" href="./News.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">新闻</span>
                        </a>
                    </li>
                    <li class="">
                        <a class="collapsible-body" href="./Todayhistory.php">
                        <i class="material-icons">radio_button_unchecked</i><span class="truncate">历史上的今天</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <!--按钮3_分E-->
            </li>
            <!--按钮3E-->
        <!--分导航内容E-->
      <!--分导航内容S-->
	  </ul>
      <div class="navigation-background"></div>
      <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only"
         href="#" data-target="slide-out">
          <i class="material-icons">menu</i>
      </a>
    </aside>
    <!-- END: SideNav-->
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-blue"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <div class="col s12">
            <div class="container">
              <div class="row">
                <div class="col s10 m6 l6">
                  <h5 class="breadcrumbs-title mt-0 mb-0">首页</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
                
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="card card-default animated zoomIn">
                            <div class="card-content about">
                                <h4 class="card-title">公告</h4>
                                <p>全新版本已经完成开发！超级漂亮的实验室来了！<br>实验室一周年庆祝！！！！发布发布以来最强更新，强大程度超越了 Version 1.0 升级 Version 2.0 时的革命性升级</p>
                            </div>
                        </div>
                    </div>
                </div>
              
              <div class="section-data-tables">
                <div class="row">
                  <div class="col s12 m12 l12">
                    <div class="card scrollspy animate fadeUp">
                      <div class="card-content">
                        <div class="row">
                          <div class="col s12">
                            <table class="data-table-simple display">
                              <thead>
                              <tr>
                                <th>名称</th>
                                <th>类型</th>
                                <th>版本</th>
                                <th>大小</th>
                                <th>日期</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>
                                  <a href="#">实验室主体</a><br/>
                                  <small>内部版本号: 20201120s1130elabmain</small>
                                </td>
                                <td>新增</td>
                                <td>Version3.0</td>
                                <td>6.3 MB</td>
                                <td>2020-11-30</td>
                              </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
<?php include("footer.php"); ?>