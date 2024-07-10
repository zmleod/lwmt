<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <title>受控文件管理</title>
  <link href="../../assets/css/layui.css" rel="stylesheet">
  <script src="../../assets/js/layui.js"></script>
  <script src="../../../assets/js/jquery.min.js"></script>
</head>

<body>
  <table id="my_table" lay-filter="my_table">
  </table>
  <script>
    function doc_download(d) {
      return '<a class="layui-table-link" target="_blank" href="' + d.dir + '" lay-event="link">' + d.doc_name + '</a>';
    }
  </script>

  <script type="text/html" id="toolbar_dropdown-in_table">
    <a class="layui-btn layui-btn-xs" lay-event="more">更多<i class="layui-icon layui-icon-down"></i></a>
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
          cols: [
            [
              //{field:'id', title: 'ID', width:80,hide:true} ,列隐藏示例
              {
                field: 'doc_number',
                title: '文件编号',
                width: 180
              },
              {
                field: 'doc_name',
                title: '文件名称',
                width: 300,
                templet: doc_download
              },

              {
                field: 'doc_version',
                title: '文件版本',
                width: 100
              },
              {
                field: 'department',
                title: '编制部门',
                width: 120
              },
              {
                field: 'effective_date',
                title: '生效日期',
                width: 120
              },
              {
                field: 'remark',
                title: '备注',
                width: 180
              },
              {
                fixed: 'right',
                title: '更多信息',
                toolbar: '#toolbar_dropdown-in_table',
                width: 120
              }

            ]
          ],

          url: './action/table_getdata_doc_action.php', // 后端数据接口
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

        // 行工具事件
        table.on('tool(my_table)', function(obj) {
          var that = this;
          var data = obj.data;
          var doc_number = data.doc_number;
          var doc_name = data.doc_name;
          var nullify_id = data.id;
          var dir = data.dir;
          var doc_version = data.doc_version;

          var doc_dir = data.dir;
          if (obj.event === 'more') {
            // 更多下拉菜单
            dropdown.render({
              elem: that,
              show: true, // 外部事件触发即显示
              data: [{
                  title: '查看表单',
                  id: 'view_form',
                },
                {
                  title: '历史版本',
                  id: 'view_history',
                },
                <?php
                require_once './dbconfig_doc.php';
            
                if (isset($_COOKIE['lwmt_dm'])) {
                  mysql_select_db('user');
                  $username = $_COOKIE['lwmt_dm'];
                  $sql = "SELECT * FROM user WHERE username = '$username' limit 1";
                  $result = mysql_query($sql);
                  $row = mysql_fetch_array($result);
                
               

                  if ($row['authority']=="all"||$row['authority']=="doc_edit") {
                    echo "{
    title: '作废',
    id: 'nullify',
  },";
                  }
                }
                ?>


              ],
              click: function(data, othis) {
                //根据 id 做出不同操作
                if (data.id === 'view_form') {

                  // 查看表单
                  layer.open({
                    type: 2,
                    title: '《' + doc_name + '》表单',
                    shadeClose: true,
                    shade: 0.8,
                    area: ['600px', '90%'],
                    content: './layer/view_form.php?doc_number=' + doc_number // 弹出层，表单
                  });

                } else if (data.id === 'view_history') {


                  // 查看历史版本
                  layer.open({
                    type: 2,
                    title: '《' + doc_name + '》历史版本',
                    shadeClose: true,
                    shade: 0.8,
                    scrollbar: false, // 关闭滚动条
                    area: ['600px', '90%'],
                    content: './layer/view_doc_history.php?doc_number=' + doc_number // 弹出层，历史版本
                  });

                } else if (data.id === 'nullify') {
                  var data = obj.data; // 获得当前行数据
                  var layEvent = obj.event; // 获得 layui 事件名称

                  layer.confirm('确定作废吗?', function(index) {


                    $.ajax({
                      url: './action/doc_nullify_action.php?id=' + nullify_id + '&dir=' + dir + '&doc_version=' + doc_version,
                      type: 'get',
                      dataType: "json",
                      success: function(msg) {
                        if (msg.code == 0) {
                          obj.del();
                          layer.close(index);
                          layer.msg(doc_name + "，已作废");

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

      });
  </script>
</body>

</html>