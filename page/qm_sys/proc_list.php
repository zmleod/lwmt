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
  <script type="text/html" id="toolbar_get_row_data">
 
        <div class="layui-inline">
          <select name="depart" id="depart" lay-filter="depart">
            <option value="">部门选择</option>
            <option value="研发部">研发部</option>
            <option value="生产部">生产部</option>
            <option value="实验室">实验室</option>
            <option value="质管部">质管部</option>
             <option value="销售部">销售部</option>
            <option value="综合部">综合部</option>
            <option value="总经理">总经理</option>

          </select>
        </div>
  
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


        form.on('select(depart)', function(data){
    var elem = data.elem; // 获得 select 原始 DOM 对象
    var value = data.value; // 获得被选中的值
    var othis = data.othis; // 获得 select 元素被替换后的 jQuery 对象
    
    
    

          table.reloadData('my_table', {
            url: './action/table_search_proc_list.php', // 后端搜索接口
            where: {
              value: value,
              
            },

            parseData: function(res) { // res 即为原始返回的数据
              var result;
              result = res.data;

           

              return {
                "code": 0, // 解析接口状态
                "msg": res.msg, // 解析提示文本
                "count": res.count, // 解析数据长度
                "data": result // 解析数据列表
              };
            },

          });



  });


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
                field: 'tiaokuan',
                title: '条款号',
                templet:xuanting  ,      
                
                width: 110
              },
              {
                field: 'tiaokuan_biaoti',
                title: '条款标题',
                     
          
                width: 220
              },
              {
                field: 'zeren_bumen',
                title: '责任部门',
            
                width: 120
              },
              {
                field: 'guocheng_mingcheng',
                title: '过程分类',
             
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
                title: '过程名称',
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
    

       

        table.on('edit(my_table)', function(obj){
    var value = obj.value // 修改后的值
    ,data = obj.data // 当前行的所有数据
    ,field = obj.field; // 当前编辑的字段名
    // 执行更新操作
    $.post('./action/proc_list_update.php', {value: value, field: field, id: data.id}, function(res){
      if(res.code == 1){
        layer.msg(res.msg, {icon: 6, time: 1000});
      } else {
        layer.msg(res.msg, {icon: 5, time: 1000});
      }
    }, 'json');
  });
     
      });

      


    
  
  </script>
</body>

</html>