<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>过程清单</title>
  <link rel="stylesheet" href="../../assets/css/layui.css">
  <script src="../../assets/js/layui.js"></script>
  <script src="../../assets/js/jquery.min.js"></script>
</head>

<body>
  <table id="my_table" lay-filter="my_table">
  </table>
  <script>
    function xuanting(d) {
      return '<span title="' + d.tiaokuan_neirong + '"><a class="layui-table-link" target="_blank" href=./operate/open.php?id=' + d.id + ' lay-event="link">' + d.tiaokuan + '</a></span>';
    }
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
                field: 'tiaokuan',
                title: '条款号',
                templet: xuanting

                // width: 100
              },
              {
                field: 'zeren_bumen',
                title: '责任部门',
                sort: true,
                // width: 180
              },
              {
                field: 'guocheng_mingcheng',
                title: '过程名称',
                edit: editable,
                // width: 150
              },
              {
                field: 'shuru',
                title: '输入',
                edit: editable,
                // width: 150
              },
              {
                field: 'shuchu',
                title: '输出',
                edit: editable,
                // width: 400
              },
              {
                field: 'zhichi_fangfa',
                title: '支持方法',
                edit: editable,
                // width: 400
              },
              {
                field: 'kpi',
                title: '绩效指标/质量目标/过程KPI',
                edit: editable,
                // width: 220
              },
              {
                field: 'qianzai_fengxian',
                title: '潜在风险',
                edit: editable,
                // width: 180
              },
              {
                field: 'kongzhi_cuoshi',
                title: '控制措施',
                edit: editable,
                // width: 180
              },





            ]
          ],

          toolbar: '#toolbar_get_row_data',
          initSort: { // 设置初始排序
            field: 'id', // 字段名


          },
          url: './action/table_getdata_proc_list.php', // 后端数据接口

          // 其他设置...
        });




        table.on('edit(my_table)', function(obj) {
          var value = obj.value // 修改后的值
            ,
            data = obj.data // 当前行的所有数据
            ,
            field = obj.field; // 当前编辑的字段名
          // 执行更新操作
          $.post('./action/test_update_obj.php', {
            value: value,
            field: field,
            id: data.id
          }, function(res) {
            if (res.code == 1) {
              layer.msg(res.msg, {
                icon: 6,
                time: 1000
              });
              obj.update({
                guocheng_mingcheng: res.guocheng_mingcheng,
              });
            } else {
              layer.msg(res.msg, {
                icon: 5,
                time: 1000
              });
            }
          }, 'json');



        });

      });
  </script>
</body>

</html>