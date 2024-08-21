<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>数据管理</title>
  <script src="./assets/js/jquery.js"></script>
  <link rel="stylesheet" href="./assets/css/layui.css">
  <script src="./assets/js/layui.js"></script>
  <script src="./assets/js/tabrightmenu.js"></script>
</head>
<style>
  .layui-logo-img {
    width: 160 px;
    /* 设置 logo 的宽度 */
    height: 50 px;
    /* 设置 logo 的高度 */
  }
</style>
<style>
  /* 弹窗主题 */

  .pwd_wrong.layui-layer-title {
    background-color: #EDEFF2;
  }

  .pwd_wrong .layui-layer-btn {
    padding: 5px 10px 10px;
  }

  .pwd_wrong .layui-layer-btn a {
    background: #fff;
    border-color: #E9E7E7;
    color: #333;
  }

  .pwd_wrong .layui-layer-btn .layui-layer-btn0 {
    border-color: #FA584D;
    background-color: #FA584D;
    color: #fff;
  }
</style>

<body class="layui-layout-body">
  <div class="layui-layout layui-layout-admin">
    <!--1.头部区域-->
    <div class="layui-header">
      <div class="layui-logo"><img src="./assets/img/logo.png" alt="LYMETAL" class="layui-logo-img"></div>
      <!-- 头部区域（可配合layui已有的水平导航） -->
      <ul class="layui-nav layui-layout-left">
        <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-header-event="menuLeft"> <i class="layui-icon layui-icon-spread-left"></i> </li>
        <li class="layui-nav-item  layui-this"><a href="#" id="index_link">数据汇总</a></li>
        <li class="layui-nav-item"><a href="#" id="ansys_link">质量分析</a></li>
        <li class="layui-nav-item"><a href="#" id="doc_link">体系文件</a></li>
        <li class="layui-nav-item"><a href="#" id="thesis_link">课题报告</a></li>
      </ul>
      <ul class="<?php
                  if (isset($_COOKIE['lwmt_dm'])) {
                    echo "layui-hide";
                  } else {
                    echo "layui-nav layui-layout-right";
                  }
                  ?> ">
        <li class="layui-nav-item layui-hide layui-show-sm-inline-block"> <a href="./index.php"> <img src="assets/img/layout/icon-v2.png" class="layui-nav-img"> 登录</a>
        </li>
      </ul>
      <ul class="<?php
                  if (isset($_COOKIE['lwmt_dm'])) {
                    echo "layui-nav layui-layout-right";
                  } else {
                    echo "layui-hide";
                  }
                  ?> ">
        <li class="layui-nav-item layui-hide layui-show-sm-inline-block"> <a href="javascript:;"> <img src="assets/img/layout/icon-v2.png" class="layui-nav-img">
            <?php
            if (isset($_COOKIE['lwmt_dm'])) {
              echo $_COOKIE['lwmt_dm'];
            } else {
              echo "";
            }
            ?>
          </a>
          <dl class="layui-nav-child">
            <dd><a href="changepwd.php">修改密码</a></dd>
            <dd><a href="logout_action.php">退出登录</a></dd>
          </dl>
        </li>
    </div>




    <!--index左侧导航 也就是实验和生产数据-->
    <div class="layui-side layui-bg-black" id="left_nav_index">
      <div class="layui-side-scroll">
        <!-- 左侧导航区域-->
        <ul class="layui-nav layui-nav-tree">
          <li class="layui-nav-item layui-nav-itemed">
            <!--需要展开的话这里的代码是 layui-nav-item layui-nav-itemed-->
            <a href="javascript:;">试验数据</a>
            <dl class="layui-nav-child">
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/lab/metallograph/index_metallograph.php" mytitle="金相试验"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;金相试验</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/lab/tensile/index_tensile.php" mytitle="拉伸试验"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;拉伸试验</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/lab/immercorro/index_immercorro.php" mytitle="浸泡腐蚀"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;浸泡腐蚀</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/lab/neusaltspray/index_neusaltspray.php" mytitle="中性盐雾"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;中性盐雾</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/lab/chemcompo/index_chemcompo.php" mytitle="化学成分"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;化学成分</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item layui-nav-itemed">
            <a href="javascript:;">生产过程</a>
            <dl class="layui-nav-child">
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/prod_process/smelt/index_smelt.php" mytitle="熔炼"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;熔炼</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/prod_process/cool/index_cool.php" mytitle="甩带"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;甩带</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/prod_process/press/index_press.php" mytitle="压坯"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;压坯</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/prod_process/extrude/index_extrude.php" mytitle="挤出"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;挤出</a></dd>
              <dd class="layui-nav-item leftdaohang_index" data-url="./page/prod_process/rolling/index_rolling.php" mytitle="轧制"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;轧制</a></dd>

            </dl>
          </li>


        </ul>


      </div>
    </div>


    <!--index主体内容区,也就是实验和生产数据-->
    <div class="layui-body" id="body_index">
      <!--tabs标签-->
      <div class="layui-tab layui-tab-card" lay-filter="demo_index" lay-allowclose="true">
        <ul class="layui-tab-title" id="demo_index">

        </ul>

        <!--这个容器用来显示各个tab-->
        <div class="layui-tab-content">

        </div>

        <div class="layui-container">
          <div class="layui-card">

            <div class="<?php
                        if (isset($_COOKIE['lwmt_dm'])) {
                          echo "layui-card-body";
                        } else {
                          echo "layui-hide";
                        }
                        ?>" id="login_done">

            </div>

            <!--   这里是登录框-->
            <div class=" <?php
                          if (isset($_COOKIE['lwmt_dm'])) {
                            echo "layui-hide";
                          } else {
                            echo "layui-card-body";
                          }
                          ?>" id="login_div">
              <form class="layui-form" method="post" action="">
                <div class="layui-form-item">
                  <label class="layui-form-label">账号</label>
                  <div class="layui-input-block">
                    <input type="text" style="width: 200px;" name="username" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                  </div>
                </div>
                <div class="layui-form-item">
                  <label class="layui-form-label">密码</label>
                  <div class="layui-input-block">
                    <input type="password" style="width: 200px;" name="password" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
                  </div>
                </div>
                <div class="layui-form-item">
                  <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="login">登录</button>
                  </div>
                </div>
              </form>
            </div>

            <!--   这里是登录框-->



          </div>
        </div>
      </div>
    </div>


    <!--ANSYS左侧导航-->
    <div class="layui-side layui-bg-black" id="left_nav_ansys" style="display:none;">
      <div class="layui-side-scroll">
        <!-- ANSYS 左侧导航区域 -->


        <ul class="layui-nav layui-nav-tree">
          <li class="layui-nav-item layui-nav-itemed">
            <!--需要展开的话这里的代码是 layui-nav-item layui-nav-itemed-->
            <a href="javascript:;">数据对比</a>
            <dl class="layui-nav-child">
              <dd class="layui-nav-item leftdaohang_ansys" data-url="./page/ansys/all-by-batch.php" mytitle="按批次对比"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;按批次对比</a></dd>

            </dl>
          </li>
          <li class="layui-nav-item layui-nav-itemed">
            <!--需要展开的话这里的代码是 layui-nav-item layui-nav-itemed-->
            <a href="javascript:;">质量分析</a>
            <dl class="layui-nav-child">
              <dd class="layui-nav-item leftdaohang_ansys" data-url="./page/ansys/tensile-else.php" mytitle="抗拉强度"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;抗拉强度</a></dd>
              <dd class="layui-nav-item leftdaohang_ansys" data-url="./page/ansys/pareto.php" mytitle="柏拉图"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;柏拉图</a></dd>

            </dl>
          </li>



        </ul>


      </div>
    </div>

    <!--ANSYS 主体内容区-->
    <div class="layui-body" id="body_ansys" style="display:none;">


      <!--ANSYS tabs标签-->
      <div class="layui-tab layui-tab-card" lay-filter="demo_ansys" lay-allowclose="true">

        <ul class="layui-tab-title" id="demo_ansys">
          <!--   <li class="layui-this">角色管理</li>-->
        </ul>

        <div class="layui-tab-content">



        </div>

        <div class="layui-container">
          <div class="layui-card">

            <div class="<?php
                        if (isset($_COOKIE['lwmt_dm'])) {
                          echo "layui-card-body";
                        } else {
                          echo "layui-hide";
                        }
                        ?>" id="login_done">
            </div>



          </div>
        </div>
      </div>
    </div>





    <!--DOC左侧导航-->
    <div class="layui-side layui-bg-black" id="left_nav_doc" style="display:none;">
      <div class="layui-side-scroll">
        <!-- DOC 左侧导航区域（可配合layui已有的垂直导航） -->


        <ul class="layui-nav layui-nav-tree" lay-filter="doc_nav_filter">
          <li class="layui-nav-item layui-nav-itemed">
            <!--需要展开的话这里的代码是 layui-nav-item layui-nav-itemed-->
            <a href="javascript:;">文件管理</a>
            <dl class="layui-nav-child">
              <dd class="layui-nav-item layui-this leftdaohang_doc" data-url="./page/doc_manage/index_doc.php" mytitle="文件清单"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;文件清单</a></dd>
              <dd class="layui-nav-item leftdaohang_doc" data-url="./page/doc_manage/doc_upload.php" mytitle="新增文件"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;新增文件</a></dd>
              <dd class="layui-nav-item leftdaohang_doc" data-url="./page/doc_manage/form_upload.php" mytitle="新增表单"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;新增表单</a></dd>

            </dl>
          </li>



        </ul>


      </div>
    </div>


    <!--doc 主体内容区-->
    <div class="layui-body" id="body_doc" style="display:none;">


      <!--doc tabs标签-->
      <div class="layui-tab layui-tab-card" lay-filter="demo_doc" lay-allowclose="true">

        <ul class="layui-tab-title" id="demo_doc">

        </ul>

        <div class="layui-tab-content">



        </div>

        <div class="layui-container">
          <div class="layui-card">

            <div class="<?php
                        if (isset($_COOKIE['lwmt_dm'])) {
                          echo "layui-card-body";
                        } else {
                          echo "layui-hide";
                        }
                        ?>" id="login_done">

            </div>





          </div>
        </div>
      </div>
    </div>






    <!--thesis左侧导航-->
    <div class="layui-side layui-bg-black" id="left_nav_thesis" style="display:none;">
      <div class="layui-side-scroll">
        <!-- thesis 左侧导航区域 -->


        <ul class="layui-nav layui-nav-tree" lay-filter="thesis_nav_filter">
          <li class="layui-nav-item layui-nav-itemed">
            <!--需要展开的话这里的代码是 layui-nav-item layui-nav-itemed-->
            <a href="javascript:;">公开报告</a>
            <dl class="layui-nav-child">
              <dd class="layui-nav-item layui-this leftdaohang_thesis" data-url="./page/project/index.php" mytitle="课题列表"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;课题列表</a></dd>
              <dd class="layui-nav-item leftdaohang_thesis" data-url="./page/thesis/thesis_list.php" mytitle="报告列表"><a href="javascript:;">&nbsp;&nbsp;&nbsp;&nbsp;报告列表</a></dd>

            </dl>
          </li>
        </ul>


      </div>
    </div>

    <!--thesis 主体内容区-->
    <div class="layui-body" id="body_thesis" style="display:none;">


      <!--thesis tabs标签-->
      <div class="layui-tab layui-tab-card" lay-filter="demo_thesis" lay-allowclose="true">

        <ul class="layui-tab-title" id="demo_thesis">

        </ul>

        <div class="layui-tab-content">



        </div>

        <div class="layui-container">
          <div class="layui-card">

            <div class="<?php
                        if (isset($_COOKIE['lwmt_dm'])) {
                          echo "layui-card-body";
                        } else {
                          echo "layui-hide";
                        }
                        ?>" id="login_done">
            </div>



          </div>
        </div>
      </div>
    </div>
    <!--4.底部固定区域-->
    <div class="layui-footer">
      <!-- 底部固定区域 -->
      © 莱韦美特 - 2024
    </div>
  </div>

  <script>
    layui.use('element', function() {


      var $ = layui.jquery,
        element = layui.element; //Tab的切换功能，切换事件监听等，需要依赖element模块

      element.tabAdd('demo_doc', { //文件选项卡开始时就显示清单 
        title: "文件清单",
        content: '<iframe style="width: 100%;height: 80vh;" scrolling="auto" src="./page/doc_manage/index_doc.php"></iframe>',
        id: "文件清单"
      })
      element.tabChange('demo_doc', '文件清单');
      element.tabAdd('demo_thesis', { //课题选项卡开始时就显示清单 
        title: "课题列表",
        content: '<iframe style="width: 100%;height: 80vh;" scrolling="auto" src="./page/project/index.php"></iframe>',
        id: "课题列表"
      })
      element.tabChange('demo_thesis', '课题列表');

      //触发事件
      var active_index = {
        tabAdd: function() {

          //新增一个Tab项
          var htmlurl = $(this).attr('data-url');
          var mytitle = $(this).attr('mytitle');
          //                  alert("触发tab增加事件："+mytitle);
          //先判断是否已经有了tab
          var arrayObj = new Array(); //创建一个数组  
          $(".layui-tab-title").find('li', 'dd').each(function() {
            var y = $(this).attr("lay-id");
            arrayObj.push(y);
          });
          //                    alert("遍历取到的数组："+arrayObj);
          var have = $.inArray(mytitle, arrayObj); //返回 3,
          if (have >= 0) {
            //tab已有标签
            //                        alert("遍历的已有标签："+mytitle);
            element.tabChange('demo_index', mytitle); //切换到当前点击的页面
          } else {
            //没有相同tab
            //                      alert("遍历的没有相同tab："+mytitle);
            element.tabAdd('demo_index', {
              title: mytitle //用于演示
                ,
              content: '<iframe style="width: 100%;height: 80vh;" scrolling="auto" src=' + htmlurl + ' ></iframe>',
              id: mytitle //实际使用一般是规定好的id，这里以时间戳模拟下
            })
            element.tabChange('demo_index', mytitle); //切换到当前点击的页面
          }
        }

      };
      $(".leftdaohang_index").click(function() {
        document.getElementById('login_div').classList.add('layui-hide');
        document.getElementById('login_done').classList.add('layui-hide');
        var type = "tabAdd";
        var othis = $(this);
        //                var htmlurl=$(this).attr('data-url');
        //                var mytitle=$(this).attr('mytitle');
        active_index[type] ? active_index[type].call(this, othis) : '';
      });



      var active_ansys = {
        tabAdd: function() {

          //新增一个Tab项
          var htmlurl = $(this).attr('data-url');
          var mytitle = $(this).attr('mytitle');
          //                  alert("触发tab增加事件："+mytitle);
          //先判断是否已经有了tab
          var arrayObj = new Array(); //创建一个数组  
          $(".layui-tab-title").find('li', 'dd').each(function() {
            var y = $(this).attr("lay-id");
            arrayObj.push(y);
          });
          //                    alert("遍历取到的数组："+arrayObj);
          var have = $.inArray(mytitle, arrayObj); //返回 3,
          if (have >= 0) {
            //tab已有标签
            //                        alert("遍历的已有标签："+mytitle);
            element.tabChange('demo_ansys', mytitle); //切换到当前点击的页面
          } else {
            //没有相同tab
            //                      alert("遍历的没有相同tab："+mytitle);
            element.tabAdd('demo_ansys', {
              title: mytitle //用于演示
                ,
              content: '<iframe style="width: 100%;height: 80vh;" scrolling="auto" src=' + htmlurl + ' ></iframe>',
              id: mytitle //实际使用一般是规定好的id，这里以时间戳模拟下
            })
            element.tabChange('demo_ansys', mytitle); //切换到当前点击的页面
          }
        }

      };
      $(".leftdaohang_ansys").click(function() {
        document.getElementById('login_div').classList.add('layui-hide');
        document.getElementById('login_done').classList.add('layui-hide');
        var type = "tabAdd";
        var othis = $(this);
        //                var htmlurl=$(this).attr('data-url');
        //                var mytitle=$(this).attr('mytitle');
        active_ansys[type] ? active_ansys[type].call(this, othis) : '';
      });


      var active_doc = {
        tabAdd: function() {

          //新增一个Tab项
          var htmlurl = $(this).attr('data-url');
          var mytitle = $(this).attr('mytitle');
          //                  alert("触发tab增加事件："+mytitle);
          //先判断是否已经有了tab
          var arrayObj = new Array(); //创建一个数组  
          $(".layui-tab-title").find('li', 'dd').each(function() {
            var y = $(this).attr("lay-id");
            arrayObj.push(y);
          });
          //                    alert("遍历取到的数组："+arrayObj);
          var have = $.inArray(mytitle, arrayObj); //返回 3,
          if (have >= 0) {
            //tab已有标签
            //                        alert("遍历的已有标签："+mytitle);
            element.tabChange('demo_doc', mytitle); //切换到当前点击的页面
          } else {
            //没有相同tab
            //                      alert("遍历的没有相同tab："+mytitle);
            element.tabAdd('demo_doc', {
              title: mytitle //用于演示
                ,
              content: '<iframe style="width: 100%;height: 80vh;" scrolling="auto" src=' + htmlurl + ' ></iframe>',
              id: mytitle //实际使用一般是规定好的id，这里以时间戳模拟下
            })
            element.tabChange('demo_doc', mytitle); //切换到当前点击的页面
          }
        }

      };
      $(".leftdaohang_doc").click(function() {
        document.getElementById('login_div').classList.add('layui-hide');
        document.getElementById('login_done').classList.add('layui-hide');
        var type = "tabAdd";
        var othis = $(this);
        //                var htmlurl=$(this).attr('data-url');
        //                var mytitle=$(this).attr('mytitle');
        active_doc[type] ? active_doc[type].call(this, othis) : '';
      });



      var active_thesis = {
        tabAdd: function() {

          //新增一个Tab项
          var htmlurl = $(this).attr('data-url');
          var mytitle = $(this).attr('mytitle');
          //                  alert("触发tab增加事件："+mytitle);
          //先判断是否已经有了tab
          var arrayObj = new Array(); //创建一个数组  
          $(".layui-tab-title").find('li', 'dd').each(function() {
            var y = $(this).attr("lay-id");
            arrayObj.push(y);
          });
          //                    alert("遍历取到的数组："+arrayObj);
          var have = $.inArray(mytitle, arrayObj); //返回 3,
          if (have >= 0) {
            //tab已有标签
            //                        alert("遍历的已有标签："+mytitle);
            element.tabChange('demo_thesis', mytitle); //切换到当前点击的页面
          } else {
            //没有相同tab
            //                      alert("遍历的没有相同tab："+mytitle);
            element.tabAdd('demo_thesis', {
              title: mytitle //用于演示
                ,
              content: '<iframe style="width: 100%;height: 80vh;" scrolling="auto" src=' + htmlurl + ' ></iframe>',
              id: mytitle //实际使用一般是规定好的id，这里以时间戳模拟下
            })
            element.tabChange('demo_thesis', mytitle); //切换到当前点击的页面
          }
        }

      };
      $(".leftdaohang_thesis").click(function() {
        document.getElementById('login_div').classList.add('layui-hide');
        document.getElementById('login_done').classList.add('layui-hide');
        var type = "tabAdd";
        var othis = $(this);
        //                var htmlurl=$(this).attr('data-url');
        //                var mytitle=$(this).attr('mytitle');
        active_thesis[type] ? active_thesis[type].call(this, othis) : '';
      });

    });
  </script>
  <script>
    //JS 
    layui.use(['element', 'layer', 'util'], function() {
      var element = layui.element;
      var layer = layui.layer;
      var util = layui.util;
      var $ = layui.$;
      var form = layui.form;


      form.on('submit(login)', function(data) {
        var field = data.field; // 获取表单字段值
        var username = field.username;
        var div = layui.div;
        // 显示填写结果，仅作演示用

        $.post('./login_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {


            layer.alert('登录成功', {
              title: 'LWMT',
              closeBtn: 0, // 不显示关闭按钮
              btn: ['确定'],
              yes: function() {
                // 当用户点击确定后，关闭弹窗并刷新页面
                window.location.reload();
              },
              skin: 'layui-layer-molv' // 样式类名

            });





          } else {

            layer.alert('账号或密码错误', {
              title: 'LWMT',
              closeBtn: 0, // 不显示关闭按钮
              btn: ['重新登录'],

              skin: 'pwd_wrong' // 样式类名

            });
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });

      //头部事件
      util.event('lay-header-event', {
        menuLeft: function(othis) { // 左侧菜单事件
          layer.msg('展开左侧菜单的操作', {
            icon: 0
          });
        },
        menuRight: function() { // 右侧菜单事件
          layer.open({
            type: 1,
            title: '更多',
            content: '<div style="padding: 15px;">处理右侧面板的操作</div>',
            area: ['260px', '100%'],
            offset: 'rt', // 右上角
            anim: 'slideLeft', // 从右侧抽屉滑出
            shadeClose: true,
            scrollbar: false
          });
        }
      });
    });

    document.getElementById('index_link').addEventListener('click', function(event) {
      event.preventDefault(); // 阻止链接默认行为，即跳转到#位置
      document.getElementById('left_nav_ansys').style.display = 'none'; // 隐藏ansys
      document.getElementById('body_ansys').style.display = 'none'; // 

      document.getElementById('left_nav_doc').style.display = 'none'; // 隐藏doc
      document.getElementById('body_doc').style.display = 'none'; // 


      document.getElementById('left_nav_thesis').style.display = 'none'; // 隐藏thesis
      document.getElementById('body_thesis').style.display = 'none'; // 

      document.getElementById('left_nav_index').style.display = 'block'; // 显示index
      document.getElementById('body_index').style.display = 'block'; // 
    });


    document.getElementById('ansys_link').addEventListener('click', function(event) {
      event.preventDefault(); // 阻止链接默认行为，即跳转到#位置
      document.getElementById('left_nav_index').style.display = 'none'; // 隐藏index
      document.getElementById('body_index').style.display = 'none'; // 

      document.getElementById('left_nav_doc').style.display = 'none'; // 隐藏doc
      document.getElementById('body_doc').style.display = 'none'; // 

      document.getElementById('left_nav_thesis').style.display = 'none'; // 隐藏thesis
      document.getElementById('body_thesis').style.display = 'none'; // 

      document.getElementById('left_nav_ansys').style.display = 'block'; // 显示ansys
      document.getElementById('body_ansys').style.display = 'block'; // 


    });

    document.getElementById('doc_link').addEventListener('click', function(event) {
      event.preventDefault(); // 阻止链接默认行为，即跳转到#位置
      document.getElementById('left_nav_index').style.display = 'none'; // 隐藏index
      document.getElementById('body_index').style.display = 'none'; // 

      document.getElementById('left_nav_ansys').style.display = 'none'; // 隐藏ansys
      document.getElementById('body_ansys').style.display = 'none'; // 


      document.getElementById('left_nav_thesis').style.display = 'none'; // 隐藏thesis
      document.getElementById('body_thesis').style.display = 'none'; // 

      document.getElementById('left_nav_doc').style.display = 'block'; // 显示doc
      document.getElementById('body_doc').style.display = 'block'; // 


    });

    document.getElementById('thesis_link').addEventListener('click', function(event) {
      event.preventDefault(); // 阻止链接默认行为，即跳转到#位置
      document.getElementById('left_nav_index').style.display = 'none'; // 隐藏index
      document.getElementById('body_index').style.display = 'none'; // 

      document.getElementById('left_nav_ansys').style.display = 'none'; // 隐藏ansys
      document.getElementById('body_ansys').style.display = 'none'; // 

      document.getElementById('left_nav_doc').style.display = 'none'; // 隐藏doc
      document.getElementById('body_doc').style.display = 'none'; // 

      document.getElementById('left_nav_thesis').style.display = 'block'; // 显示thesis
      document.getElementById('body_thesis').style.display = 'block'; // 


    });



    /*选项卡右键功能，每个BODY是一块单独的代码*/
    layui.config({
      base: 'js/',
    }).use(['element', 'tabrightmenu'], function() {
      let element = layui.element;
      let rightmenu_ = layui.tabrightmenu;

      // 默认方式渲染全部：关闭当前（closethis）、关闭所有（closeall）、关闭其它（closeothers）、关闭左侧所有（closeleft）、关闭右侧所有（closeright）、刷新当前页（refresh）
      rightmenu_.render({
        container: '#body_index',
        filter: 'demo_index',
        navArr: [{
            eventName: 'refresh',
            title: '刷新当前页'
          },
          {
            eventName: 'closethis',
            title: '关闭当前页'
          },
          {
            eventName: 'closeall',
            title: '关闭所有页'
          },
          {
            eventName: 'closeothers',
            title: '关闭其它页'
          }
        ],
      });
    });

    layui.config({
      base: 'js/',
    }).use(['element', 'tabrightmenu'], function() {
      let element = layui.element;
      let rightmenu_ = layui.tabrightmenu;

      // 默认方式渲染全部：关闭当前（closethis）、关闭所有（closeall）、关闭其它（closeothers）、关闭左侧所有（closeleft）、关闭右侧所有（closeright）、刷新当前页（refresh）
      rightmenu_.render({
        container: '#body_ansys',
        filter: 'demo_ansys',
        navArr: [{
            eventName: 'refresh',
            title: '刷新当前页'
          },
          {
            eventName: 'closethis',
            title: '关闭当前页'
          },
          {
            eventName: 'closeall',
            title: '关闭所有页'
          },
          {
            eventName: 'closeothers',
            title: '关闭其它页'
          }
        ],
      });
    });

    layui.config({
      base: 'js/',
    }).use(['element', 'tabrightmenu'], function() {
      let element = layui.element;
      let rightmenu_ = layui.tabrightmenu;

      // 默认方式渲染全部：关闭当前（closethis）、关闭所有（closeall）、关闭其它（closeothers）、关闭左侧所有（closeleft）、关闭右侧所有（closeright）、刷新当前页（refresh）
      rightmenu_.render({
        container: '#body_doc',
        filter: 'demo_doc',
        navArr: [{
            eventName: 'refresh',
            title: '刷新当前页'
          },
          {
            eventName: 'closethis',
            title: '关闭当前页'
          },
          {
            eventName: 'closeall',
            title: '关闭所有页'
          },
          {
            eventName: 'closeothers',
            title: '关闭其它页'
          }
        ],
      });
    });

    layui.config({
      base: 'js/',
    }).use(['element', 'tabrightmenu'], function() {
      let element = layui.element;
      let rightmenu_ = layui.tabrightmenu;

      // 默认方式渲染全部：关闭当前（closethis）、关闭所有（closeall）、关闭其它（closeothers）、关闭左侧所有（closeleft）、关闭右侧所有（closeright）、刷新当前页（refresh）
      rightmenu_.render({
        container: '#body_thesis',
        filter: 'demo_thesis',
        navArr: [{
            eventName: 'refresh',
            title: '刷新当前页'
          },
          {
            eventName: 'closethis',
            title: '关闭当前页'
          },
          {
            eventName: 'closeall',
            title: '关闭所有页'
          },
          {
            eventName: 'closeothers',
            title: '关闭其它页'
          }
        ],
      });
    });
  </script>


</body>

</html>