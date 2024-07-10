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
    <a href="./operate/add_tensile.php" class="layui-btn layui-btn-sm">新增数据</a>
    <div class="layui-inline" id="search_title">
      <input class="layui-input search" name="yangjian_picihao" id="yangjian_picihao" placeholder="根据样件批次号搜索">
    </div>
    <div class="layui-inline">
      <input class="layui-input search" name="baogao_bianhao" id="baogao_bianhao" placeholder="根据报告编号搜索">
    </div>
    <div class="layui-inline">
      <input class="layui-input search" name="yangjian_mingcheng" id="yangjian_mingcheng" placeholder="根据牌号搜索">
    </div>


    <div class="layui-inline" id="search_date_start">
      <input class="layui-input" name="date_start" id="date_start" placeholder="报告日期(起始)">
    </div>
    <div class="layui-inline" id="search_date_start">
      <input class="layui-input" name="date_end" id="date_end" placeholder="报告日期(结束)">
    </div>
    <button type="button" class="layui-btn layui-btn-sm" id="search">搜索</button>
  </script>
  <script type="text/html" id="toolbar_dropdown-in_table">
    <a class="layui-btn layui-btn-xs" lay-event="more">操作 <i class="layui-icon layui-icon-down"></i></a>
  </script>
  <script>
    layui.use(




      function() {
        var table = layui.table;
        var form = layui.form;
        var util = layui.util;
        var dropdown = layui.dropdown;
        var laydate = layui.laydate;
        var $=layui.$;


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
                field: 'yangjian_laiyuan',
                title: '样件来源',
                hide: true,
                width: 120
              },
              {
                field: 'jiance_riqi',
                title: '检验日期',
                hide: true,
                width: 120
              },


              {
                field: 'baogao_riqi',
                title: '报告日期',
                //sort: true,
                edit: editable,
                width: 120
              },
              {
                field: 'yangjian_leixing',
                title: '样件类型',
                edit: editable,
                width: 120
              },


              {
                field: 'yangjian_mingcheng',
                title: '名称/牌号',
                edit: editable,
                width: 100
              },
              {
                field: 'yangjian_picihao',
                title: '批次号',
                edit: editable,
                width: 150
              },

              {
                field: 'baogao_bianhao',
                title: '报告编号',
                edit: editable,
                width: 140
              },


              {
                field: 'yangjian_guige',
                title: '样件规格',
                edit: editable,
                width: 120
              },
              {
                field: 'yangjian_bianhao',
                title: '样件编号',
                edit: editable,
                width: 120
              },
              {
                field: 'tanxing_moliang',
                title: '弹性模量<br> (MPa)',
                edit: editable,
                width: 100
              },
              {
                field: 'kangla_qiangdu',
                title: '抗拉强度<br> (MPa)',
                edit: editable,
                width: 100
              },
              {
                field: 'suxing_yanshen',
                title: '屈服强度<br> (MPa)',
                edit: editable,
                width: 100
              },
              {
                field: 'duanhou_shenchang',
                title: '断后伸长<br> (%)',
                edit: editable,
                width: 100
              },
              {
                field: 'beizhu',
                title: '备注',
                edit: editable,
                width: 120
              },

              {
                fixed: 'right',
                title: '操作',
                toolbar: '#toolbar_dropdown-in_table',
                width: 80
              }

            ]
          ],

          toolbar: '#toolbar_get_row_data',
          // initSort: { // 设置初始排序
          //   field: 'id', // 字段名


          // },
          url: './action/table_getdata_tensile_action.php', // 后端数据接口
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
          var yangjian_picihao = document.getElementById('yangjian_picihao').value;
          var baogao_bianhao = document.getElementById('baogao_bianhao').value;
          var yangjian_mingcheng = document.getElementById('yangjian_mingcheng').value;
          var date_start = document.getElementById('date_start').value;
          var date_end = document.getElementById('date_end').value;

          table.reloadData('my_table', {
            url: './action/table_search_tensile_action.php', // 后端搜索接口
            where: {
              yangjian_picihao: yangjian_picihao,
              baogao_bianhao: baogao_bianhao,
              yangjian_mingcheng:yangjian_mingcheng,
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
          var edit_view_id = data.baogao_bianhao;
          var del_id = data.id;
          var trace_yangjian_picihao = data.yangjian_picihao;
          var trace_id = data.id;




          if (obj.event === 'more') {
            // 更多下拉菜单
            dropdown.render({
              elem: that,
              show: true, // 外部事件触发即显示
              data: [{
                  title: '追溯',
                  id: 'trace',
                },
                {
                  title: '查看',
                  id: 'view'
                },
                {
                  title: '编辑',
                  id: 'edit'
                },
                {
                  title: '加入批次对比',
                  id: 'add_batch'
                },
                {
                  title: '删除',
                  id: 'del'
                },
              ],

              click: function(data, othis) {



                // 貌似不需要这里
                // obj.setRowChecked({
                //   type: 'checkbox' // radio 单选模式；checkbox 复选模式
                // });


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
                    content: '../trace_lab.php?yangjian_picihao=' + trace_yangjian_picihao + '&id=' + trace_id + '&exp=tensile_exp' // 弹出追溯
                  });

                } else if (data.id === 'view') {

                  var data = obj.data; // 获得当前行数据
                  var layEvent = obj.event; // 获得 layui 事件名称

                  // 查看报告
                  layer.open({
                    type: 2,
                    title: false,
                    shadeClose: true,
                    shade: 0.8,
                    scrollbar: false, // 关闭滚动条
                    area: ['850px', '95%'],
                    content: './operate/report_view_tensile.php?baogao_bianhao=' + edit_view_id // 弹出报告
                  });

                } else if (data.id === 'edit') {

                  layer.open({
                    type: 2,
                    title: false,
                    shadeClose: true,
                    shade: 0.8,
                    scrollbar: false, // 关闭滚动条
                    area: ['98%', '95%'],
                    content: './operate/report_edit_tensile.php?baogao_bianhao=' + edit_view_id // 弹出编辑窗口
                  });


                } else if (data.id === 'add_batch') {
                  $.ajax({
                    url: '../../ansys/action/add-to-batch.php?yangjian_picihao=' + trace_yangjian_picihao,
                    type: 'get',
                    dataType: "json",
                    success: function(msg) {
                      if (msg.code == 0) {
                        layer.msg("已加入对比库");

                      }
                      if (msg.code == 1) {
                        layer.msg("批次号已存在，未新增");

                      }

                    }
                  })

                } else if (data.id === 'del') {
                  layer.confirm('确定删除吗?', function(index) {
                    obj.del();
                    layer.close(index);

                    $.ajax({
                      url: './action/del_row_tensile.php?id=' + del_id,
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