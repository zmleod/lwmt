<!DOCTYPE html>
<html>

<head>
  <?php require_once "dbconfig_project.php";?>
  <meta charset="utf-8">
  <title>课题列表</title>
  <link rel="stylesheet" href="../../assets/css/layui.css">
  <script src="../../assets/js/layui.js"></script>
  <script src="../../assets/js/jquery.min.js"></script>
</head>
<style>
        .layui-table-cell {
   	height: auto!important;
}

    </style>
<body>
  <table id="my_table" lay-filter="my_table">
  </table>

  <script type="text/html" id="toolbar_get_row_data">
    <button type="button" class="layui-btn layui-btn-sm" lay-on="new_project">新增课题</button>

    <!-- <div class="layui-inline" id="search_title">
      <input class="layui-input search" name="yangjian_picihao" id="yangjian_picihao" placeholder="搜索主题">
    </div>
    <div class="layui-inline">
      <input class="layui-input search" name="baogao_bianhao" id="baogao_bianhao" placeholder="搜索概要">
    </div> -->



    <!-- <div class="layui-inline" id="search_date_start">
      <input class="layui-input" name="date_start" id="date_start" placeholder="起始日期">
    </div>

    <div class="layui-inline" id="search_date_start">
      <input class="layui-input" name="date_end" id="date_end" placeholder="结束日期">
    </div> -->
    <!-- <div class="layui-inline" id="search_date_start">
      <input type="checkbox" name="cb_tanxingmoliang" value="1" title="未完成" checked>
      <input type="checkbox" name="cb_tanxingmoliang" value="0" title="已完成">
    </div> -->
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
        var $ = layui.$;


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
                field: 'date_start',
                title: '开始时间',

                width: 130
              },
              {
                field: 'date_end_plan',
                title: '截止时间',

                width: 130
              },
              {
                field: 'project_name',
                title: '主题',

                width: 300
              },


              {
                field: 'progress_name',
                title: '当前进度',


                width: 300
              },
           
              {
                title: "进度详情",
                width: 400,
                align: "left",
                event: "",

                templet: function(d) {
                  if (d.progress_content == null) {
                    let
                      html = '<div style="white-space:normal; word-break:break-all;overflow:hidden;">';

                    html += '</div>';
                    return html;
                  } else {
                    let
                      html = '<div style="white-space:normal; word-break:break-all;overflow:hidden;">';
                    html += d.progress_content;
                    html += '</div>';
                    return html;
                  }

                },


              
              },
              {
                field: 'fuzeren',
                title: '负责人',


                width: 120
              },
              {
                field: 'status',
                title: '状态',
                hide: true,

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
          url: './action/table_getdata_project_action.php', // 后端数据接口
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
            url: './action/table_search_project_action.php', // 后端搜索接口
            where: {
              yangjian_picihao: yangjian_picihao,
              baogao_bianhao: baogao_bianhao,
              yangjian_mingcheng: yangjian_mingcheng,
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
        util.on('lay-on', {
          new_project: function() {
            // iframe 层
            layer.open({
              type: 2,
              title: false,
              shadeClose: true,
              shade: 0.8,
              scrollbar: false, // 关闭滚动条
              area: ['1200px', '95%'],
              content: './operation/add_project.php' // iframe 的 url
            });
          },

        });
        // 行工具事件
        table.on('tool(my_table)', function(obj) {
          var that = this;
          var data = obj.data;
          var project_id = data.project_id;





          if (obj.event === 'more') {
            // 更多下拉菜单
            dropdown.render({
              elem: that,
              show: true, // 外部事件触发即显示
              data: [{
                  title: '查看',
                  id: 'view'
                },
                // {
                //   title: '编辑',
                //   id: 'edit'
                // },
                // {
                //   title: '加入批次对比',
                //   id: 'add_batch'
                // },
                // {
                //   title: '删除',
                //   id: 'del'
                // },
              ],

              click: function(data, othis) {



                // 貌似不需要这里
                // obj.setRowChecked({
                //   type: 'checkbox' // radio 单选模式；checkbox 复选模式
                // });


                //根据 id 做出不同操作
                if (data.id === 'view') {

                  var data = obj.data; // 获得当前行数据

                  var layEvent = obj.event; // 获得 layui 事件名称

                  // 查看报告
                  layer.open({
                    type: 2,
                    title: false,
                    shadeClose: true,
                    shade: 0.8,
                    scrollbar: false, // 关闭滚动条
                    area: ['1200px', '95%'],
                    content: './project.php?project_id=' + project_id // 弹出报告
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