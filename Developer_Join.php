<?php include("header.php"); ?>
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
            <li class="bold active">
                <a class="waves-effect waves-cyan active" href="./Developer.php">
                    <i class="material-icons">group</i>
                    <span class="menu-title">开发团队</span>
                    <span class="badge badge pill pink accent-2 float-right mr-10">2</span>
                </a>
            </li>
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
                  <h5 class="breadcrumbs-title mt-0 mb-0">加入实验室</h5>
                  <ol class="breadcrumbs mb-0 truncate">
                    <li class="breadcrumb-item"><a href="./">首页</a></li>
                    <li class="breadcrumb-item"><a href="./Developer_Join.php">开发团队</li>
                    <li class="breadcrumb-item active">加入实验室</li>
                  </ol>
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
                    <h4 class="card-title">须知</h4>
                    <p>加入实验室，必须具备个人开发能力！<br>我们目前仅接受PHP项目的实验。<br>实验项目目前不允许付费！！全部免费开放且开源！！</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                 <div class="col s12 m12 l12">
                    <div class="card card-default animated zoomIn">
                    <div class="card-content about">
                    <h4 class="card-title">加入方式</h4>
                    <p>QQ联系：<a href="./Plugin/JumpQQ/index.html?2357307393" target="_blank">2357307393</a></p>
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