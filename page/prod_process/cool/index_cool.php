<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LAYUI 表格搜索示例</title>
  <link rel="stylesheet" href="../../../assets/css/layui.css">
  <script src="../../../assets/js/layui.js"></script>
  <script src="../../../assets/js/jquery.min.js"></script>
</head>

<body>
  <table id="my_table" lay-filter="my_table">
  </table>
  <script type="text/html" id="toolbar_get_row_data">
    <a href="./operate/add_cool.php" class="layui-btn layui-btn-sm">新增数据</a>


    <div class="layui-inline" id="search_title">
      <input class="layui-input search" name="shuaidai_luhao" id="shuaidai_luhao" placeholder="根据炉号搜索">
    </div>



    <div class="layui-inline" id="search_date_start">
      <input class="layui-input" name="date_start" id="date_start" placeholder="甩带日期(起始)">
    </div>
    <div class="layui-inline" id="search_date_start">
      <input class="layui-input" name="date_end" id="date_end" placeholder="甩带日期(结束)">
    </div>
    <button type="button" class="layui-btn layui-btn-sm" id="search">搜索</button>
  </script>
  <script type="text/html" id="toolbar_dropdown-in_table">
    <a class="layui-btn layui-btn-xs" lay-event="more">操作 <i class="layui-icon layui-icon-down"></i></a>
  </script>
  <script>
    layui.use(['form', 'laydate', 'util', 'jquery'],




      function() {
        var table = layui.table;
        var form = layui.form;
        var util = layui.util;
        var layer = layui.layer;
        var dropdown = layui.dropdown;
        var laydate = layui.laydate;

        // 根据返回数据中某个字段来判断开启该行的编辑
        var editable = function(d) {
          if (d.editable) return 'text'; // 这里假设以 editable 字段为判断依据,数据表中要加入一个editable字段，只要有值就判断为可编辑
        };




        var inst = table.render({
          elem: '#my_table',
          height: 'full-0.1', // 固定表头，最大高度减去其他容器已占有的高度差





          cols: [
            [

              //{field:'id', title: 'ID', width:80,hide:true} ,列隐藏示例
              {
                field: 'shuaidai_tianbiaoren',
                title: '填表人',
                hide: true,
                edit: editable
              },
              {
                field: 'shuaidai_canyuren',
                title: '参与人',
                hide: true,
                edit: editable
              },
              {
                field: 'shuaidai_shebei',
                title: '设备编号',
                hide: true,
                edit: editable
              },
              {
                field: 'shuaidai_riqi',
                title: '日期',
                edit: editable,
                width: 120
              },
              {
                field: 'shuaidai_luhao',
                title: '炉号',
                edit: editable,
                width: 150
              },
              {
                field: 'shuaidai_paihao',
                title: '牌号',
                edit: editable,
                width: 80
              },

              {
                field: 'shuaidai_hejin_zhongliang',
                title: '合金重量<br> (g)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_ganguo',
                title: '坩埚',
                edit: editable,
                width: 60
              },
              {
                field: 'ganguo_pinci',
                title: '频次/坩埚',
                edit: editable,
                width: 60
              },
              {
                field: 'shuaidai_fagan',
                title: '阀杆',
                edit: editable,
                width: 60
              },
              {
                field: 'fagan_pinci',
                title: '频次/阀杆',
                edit: editable,
                width: 60
              },
              {
                field: 'shuaidai_penzui',
                title: '喷嘴',
                edit: editable,
                width: 60
              },
              {
                field: 'penzui_pinci',
                title: '频次/喷嘴',
                edit: editable,
                width: 60
              },
              {
                field: 'tanhuang_pinci',
                title: '频次/弹簧',
                edit: editable,
                width: 60
              },
              {
                field: 'shuaidai_xiansudu',
                title: '线速度<br> (m/s)',
                edit: editable,
                width: 80
              },
              {
                field: 'shuaidai_shijian',
                title: '时间<br> (min)',
                edit: editable,
                width: 60
              },
              {
                field: 'shuaidai_liudao_shuliang',
                title: '流道数量',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_pendai_yali',
                title: '坩埚始压<br> (KPa)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_pendai_yali_2',
                title: '坩埚终压<br> (KPa)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_gunzui_jianju',
                title: '辊嘴间距',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_qishi_meiye_wendu',
                title: '镁液温度<br> (℃)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_daicai_houdu',
                title: '带材厚度<br> (um)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_daicai_kuandu',
                title: '带材宽度<br> (mm)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_jingzhi_shijian',
                title: '静置时间<br> (min)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_yangqi_nongdu',
                title: '氧气浓度（始）<br> (%)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_yangqi_nongdu_2',
                title: '氧气浓度（终）<br> (%)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_zhifen_zhongliang',
                title: '制粉重量<br> (g)',
                edit: editable,
                width: 100
              },

              {
                field: 'shuaidai_gunlun_zhuansu_xiansudu',
                title: '辊轮线速度<br> (m/s)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_paoguang_zhuansu',
                title: '抛光转速<br> (??)',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_paoguanglun_mushu',
                title: '抛光轮目数<br> ',
                edit: editable,
                width: 100
              },
              {
                field: 'shuaidai_kongzai_fuzeren',
                title: '空载负责人',
                edit: editable,
                width: 100
              },
              {
                field: 'CO2_1',
                title: 'CO2流量<br>（L/min）',
                edit: editable,
                width: 100
              },
              {
                field: 'CO2_2',
                title: 'CO2用量<br>（m³）',
                edit: editable,
                width: 100
              },

              
              


              {
                field: 'shuaidai_beizhu',
                title: '备注',
                edit: editable,
                width: 120
              },
              {
                field: 'laiyuan_picihao',
                title: '溯源代号',
                edit: editable,
                width: 150
              },
              {
                field: 'laiyuan_picihao_add',
                title: '溯源补充',
                edit: editable,
                width: 150
              },
              {
                fixed: 'right',
                title: '操作',
                toolbar: '#toolbar_dropdown-in_table',
                width: 70
              }


            ]
          ],

          toolbar: '#toolbar_get_row_data',
          initSort: { // 设置初始排序
            field: 'id', // 字段名


          },
          url: './action/table_getdata_cool_action.php', // 后端数据接口
          page: true, // 是否显示分页
          limits: [15, 50, 100, 150],
          limit: 50, // 每页默认显示的数量

          parseData: function(res) { //将原始数据解析成 table 组件所规定的数据，res为从url中get到的数据
            var result;

            //(前端来实现)分页方法一：
            //这是前台 用res.data接受全部数据 再根据当前页的条件从全部数据中选取一部分数据显示出来
            if (this.page.curr) {
              //若为第二页 则curr为2 页面显示的数据就是从res.data集合数组里的 （2-1）*limit（10）=10 到 limit（10）*2=20的数据
              result = res.data.slice(this.limit * (this.page.curr - 1), this.limit * this.page.curr);
            } else {
              // 一开始就是第一页 则就是 显示的数据就是从res.data集合数组里的0到limit（10）中
              result = res.data.slice(0, this.limit);
            }
            return {
              "code": 0, //解析接口状态
              "msg": res.msg, //解析提示文本
              "count": res.count, //解析数据长度
              "data": result //解析数据列表
            };
          }
          // 其他设置...
        });
        // 监听搜索按钮点击事件
        document.getElementById('search').onclick = function() {
          var shuaidai_luhao = document.getElementById('shuaidai_luhao').value;
          var date_start = document.getElementById('date_start').value;
          var date_end = document.getElementById('date_end').value;

          table.reloadData('my_table', {
            url: './action/table_search_cool_action.php' // 后端搜索接口
              ,
            where: {
              shuaidai_luhao: shuaidai_luhao,
              date_start: date_start,
              date_end: date_end

            },
            parseData: function(res) { // res 即为原始返回的数据
              var result;


              if (this.page.curr) {
                //若为第二页 则curr为2 页面显示的数据就是从res.data集合数组里的 （2-1）*limit（10）=10 到 limit（10）*2=20的数据
                result = res.data.slice(this.limit * (this.page.curr - 1), this.limit * this.page.curr);
              } else {
                // 一开始就是第一页 则就是 显示的数据就是从res.data集合数组里的0到limit（10）中
                result = res.data.slice(0, this.limit);
              }

              return {
                "code": 0, // 解析接口状态
                "msg": res.msg, // 解析提示文本
                "count": res.count, // 解析数据长度
                "data": result // 解析数据列表
              };
            },
          });
        };
        // 行工具事件
        table.on('tool(my_table)', function(obj) {
          var that = this;
          var data = obj.data;
          var php_id = data.id;
          var picihao_luhao = data.shuaidai_luhao;


          if (obj.event === 'more') {
            // 更多下拉菜单
            dropdown.render({
              elem: that,
              show: true, // 外部事件触发即显示
              data: [{
                  title: '追溯',
                  id: 'trace'
                },
                /*{
          title: '查看',
          id: 'view'
        }, 
			   {
          title: '编辑',
          id: 'edit'
        },*/
                <?php
                require_once '../dbconfig_prod_process.php';

                if (isset($_COOKIE['lwmt_dm'])) {
                  mysql_select_db('user');
                  $username = $_COOKIE['lwmt_dm'];
                  $sql = "SELECT * FROM user WHERE username = '$username' limit 1";
                  $result = mysql_query($sql);
                  $row = mysql_fetch_array($result);



                  if ($row['authority'] == "all" || $row['authority'] == "prod") {
                    echo "{
                           title: '删除',
                           id: 'del',
                           },";
                  }
                }
                ?>

              ],

              click: function(data, othis) {

                //根据 id 做出不同操作
                if (data.id === 'trace') {

                  var data = obj.data; // 获得当前行数据
                  var layEvent = obj.event; // 获得 layui 事件名称

                  // 追溯
                  layer.open({
                    type: 2,
                    title: false,
                    shadeClose: true,
                    shade: 0.8,
                    scrollbar: false, // 关闭滚动条
                    area: ['90%', '90%'],
                    content: '../trace_prod.php?picihao_luhao=' + picihao_luhao // 弹出追溯
                  });

                } else
                  /* if(data.id === 'view'){
                              window.location.href = './operate/report_view_cool.php?id='+php_id;
                            }
                              else if(data.id === 'edit'){
                              window.location.href = './operate/report_edit_cool.php?id='+php_id;
                            }
                              else */
                  if (data.id === 'del') {
                    layer.confirm('确定删除吗?', function(index) {
                      obj.del();
                      layer.close(index);

                      $.ajax({
                        url: './action/del_row_cool.php?id=' + php_id,
                        type: 'get',
                        dataType: "json",
                        success: function(msg) {
                          if (msg.code == 0) {
                            layer.msg("删除成功");
                          }

                        }
                      })

                    });
                  }

              },
              align: 'right', // 右对齐弹出
              style: 'box-shadow: 1px 1px 10px rgb(0 0 0 / 12%);' //设置额外样式
            })
          }
        });
        table.on('row(my_table)', function(obj) {


          // 标注当前点击行的选中状态
          obj.setRowChecked({
            type: 'checkbox' // radio 单选模式；checkbox 复选模式
          });
        });
        laydate.render({
          elem: '#date_start',

        });
        laydate.render({
          elem: '#date_end',

        });
      });
    $(document).ready(function() {
     
      var $inputs = $('input[class="layui-input search"]');
      // 监听 input 值的变化
      $inputs.on('input', function() {
        document.getElementById('search').click();
      });
    });
  </script>
</body>

</html>