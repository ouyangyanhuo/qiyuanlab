<?php require("header.php"); ?>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <!--主导航名称S-->
        <li class="navigation-header">
            <a class="navigation-header-text">导航</a><i class="navigation-header-icon material-icons">more_horiz</i>
        </li>
        <!--主导航名称E-->
        <!--主导航内容S-->
            <li class="bold">
                <a class="waves-effect waves-cyan" href="./">
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
            <li class="bold active">
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
                    <li class="active">
                        <a class="collapsible-body active" href="./Joke.php">
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
                  <h5 class="breadcrumbs-title mt-0 mb-0">笑话 (Joke)</h5>
                  <ol class="breadcrumbs mb-0 truncate">
                    <li class="breadcrumb-item"><a href="/">首页</a></li>
                    <li class="breadcrumb-item active">笑话 (Joke)</li>
                  </ol>
                </div>
                <div class="col s2 m6 l6">
                  <a class="btn waves-effect waves-light breadcrumbs-btn right" href="./Joke">
                    <i class="material-icons hide-on-med-and-up">mouse</i>
                    <span class="hide-on-small-onl">立刻开始</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section">
              <div class="row">
                <div class="col s12 m4 l4">
                  <div class="card horizontal animated zoomIn">
                    <div class="card-image device card-content valign-wrapper">
                      <img src="/favicon.ico" alt="ICON">
                    </div>
                    <div class="card-stacked">
                      <div class="card-content info">
                        <h4 class="card-title">常用链接</h4>
                        <p><a href="./Join.php" target="_blank">加入开发行列</a></p>
                        <p><a href="https://jq.qq.com/?_wv=1027&k=7yom0nyO" target="_blank">交流群组</a></p>
                        <p><a href="https://www.teendreams.cn" target="_blank">开发者论坛</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4 l4">
                  <div class="card maintainer animated zoomIn">
                    <div class="card-content info">
                      <div class="row valign-wrapper">
                        <div class="col s2 maintainer">
                            <img class="circle responsive-img" src="https://q1.qlogo.cn/g?b=qq&nk=2357307393&s=640"></div>
                        <div class="col s10 maintainer">
                          <h4 class="card-title maintainer">Magneto
                          <i id="dropdown-trigger-sns-list" class="material-icons right dropdown-trigger" data-target="sns-list">more_vert</i>
                          <ul id="sns-list" class="dropdown-content" tabindex="0" style="">
                          <li tabindex="0">
                              <a href="https://github.com/ouyangyanhuo" target="_blank" class="light-blue-text text-darken-1">Github</a>
                          </li>
                          <li tabindex="0">
                              <a href="./Plugin/JumpQQ/index.html?2240325136" target="_blank" class="light-blue-text text-darken-1">QQ</a>
                          </li>
                          <li tabindex="0">
                              <a href="https://www.teendreams.cn/u/Magneto" target="_blank" class="light-blue-text text-darken-1">BBS</a>
                          </li>
                          <li tabindex="0">
                              <a href="https://weibo.com/pikaqiuuuu" target="_blank" class="light-blue-text text-darken-1">微博</a>
                          </li>
                          </ul>
                          </h4>
                          <small>这个实验项目被Magneto所创建</small>
                        </div>
                      </div>
                      <p class="maintainer">热爱世界，热爱生活.</p>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4 l4">
                  <div class="card animated zoomIn">
                    <div class="card-content info">
                      <h4 class="card-title">当前部署参数</h4>
                      <p>类型: 正式版</p>
                      <p>版本号：Version 1.1</p>
                      <p>开发者: Magneto</p>
                      <p>版本大小: 149.5 KB</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card card-default animated zoomIn">
                    <div class="card-content faq">
                      <h4 class="card-title">版本说明</h4>
                      <p>正式版: 可直接使用的版本.</p>
                      <p>开发版: 开源的版本，但不可使用，仅提供下载，与正式版有差异.</p>
                      <p>测试版: 可以直接使用，但仍可能存在部分Bug.</p>
                      <p>注意事项: 如果您使用的浏览设备出现浏览异常，请联系当前版本的开发者.开发版的部署，不提供任何技术支持，这不在起源实验室的负责范围内.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col s12 m12 l12">
                  <div class="card card-default animated zoomIn">
                    <div class="card-content faq">
                      <h4 class="card-title">开源下载/直接引用</h4>
                      <p>仅提供最新版本下载，历史版本请查看更新版本</p>
                      <p><a href="./Joke/download/develop1.0.zip" target="_blank">develop1.0.zip</a></p>
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
                                <th>版本</th>
                                <th>修改者</th>
                                <th>类型</th>
                                <th>大小</th>
                                <th>日期</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                <td>
                                  <a mdui-dialog="{target: '#data-2'}">Version 1.1</a><br/>
                                </td>
                                <td>Magneto</td>
                                <td>正式版</td>
                                <td>149.5 KB</td>
                                <td>2020-08-31</td>
                              </tr>
                              <tr>
                                <td>
                                  <a mdui-dialog="{target: '#data-1'}">Version 1.0</a><br/>
                                </td>
                                <td>Magneto</td>
                                <td>正式版</td>
                                <td>150.1 KB</td>
                                <td>2020-04-10</td>
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
        <!--更新日志-1-->
        <div class="mdui-dialog" id="data-1">
            <div class="mdui-dialog-title">Version 1.0</div>
            <div class="mdui-dialog-content">创建一言实验</div>
            <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" mdui-dialog-close>知道了</button>
            </div>
        </div>
        <!--更新日志-2-->
        <div class="mdui-dialog" id="data-2">
            <div class="mdui-dialog-title">Version 1.1</div>
            <div class="mdui-dialog-content">优化代码</div>
            <div class="mdui-dialog-actions">
            <button class="mdui-btn mdui-ripple" mdui-dialog-close>知道了</button>
            </div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
<?php include("footer.php"); ?>