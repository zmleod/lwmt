<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="./assets/css/layui.css">
  <script src="./assets/js/layui.js"></script>
</head>
 
<body>
    <div>
        <div class="layui-container">
            <!-- 给容器追加 class="layui-form-pane"，即可显示为方框风格 -->
            <form class="layui-form layui-form-pane" action="">
            <div class="layui-row" style="padding-top: 20px;">
                <div class="layui-col-xs6">
                  <div class="grid-demo grid-demo-bg1">
                     <!-- 客户  -->
 
            <div class="layui-form-item">
                <div class="layui-input-group">
                  <div class="layui-input-prefix">
                    客户 *
                  </div>
                  <input type="text" placeholder="客户名称" class="layui-input">
                  <div class="layui-input-split layui-input-suffix" style="cursor: pointer;">
                    <i class="layui-icon layui-icon-search"></i>
                  </div>
                </div>
            </div>
                  </div>
                </div>
                <div class="layui-col-xs6">
                  <div class="grid-demo"><!-- 日期           -->
                    <div class="layui-inline">
                        <label class="layui-form-label">日期</label>
                        <div class="layui-input-inline layui-input-wrap">
                            <div class="layui-input-prefix">
                                <i class="layui-icon layui-icon-date"></i>
                            </div>
                            <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-MM-dd" autocomplete="off"
                                class="layui-input">
                        </div>
                    </div>
                </div>
                </div>
              </div>
           
                
    
            <div class="layui-card-body layui-text">
                <div id="tableRes" class="table-overlay">
                    <table id="paramTable" lay-filter="paramTable" class="layui-hide"></table>
                </div>
            </div>
            <div class="layui-form-item" style="padding-left: 20px;">
                <button class="layui-btn" lay-submit lay-filter="demo2">确认</button>
                <button type="reset" class="layui-btn layui-btn-primary">重置</button>
              </div>
        </div>
        
    </form>
    </div>
 
    <script type="text/html" id="toolbarDemo">
    <div class="layui-btn-container">
      <button class="layui-btn layui-btn-sm" lay-event="add">增加一行</button>
      <!-- <button class="layui-btn layui-btn-sm" lay-event="delete">删除</button> -->
      <button class="layui-btn layui-btn-sm" lay-event="update">合计刷新</button>
    </div>
  </script>
    <script type="text/html" id="barDemo">
      <!-- <a class="layui-btn layui-btn-xs" lay-event="add">添加</a> -->
    <a class="layui-btn layui-btn-xs" lay-event="del">删除</a>
    </div>
    </script>
    <script src="./layui/layui.js"></script>
    <script>
        layui.use(['table', 'form', 'jquery','laydate'], function () {
            var table = layui.table;
            var form = layui.form;
            var laydate = layui.laydate;
            var $ = layui.jquery;
            var tableData = new Array();
            var param = {
                tempId: new Date().valueOf(),
                keyParam: '',
                valueParam: '',
            };
            tableData.push(param);
 
            // 提交事件
 
 
            //初始化表单
            table.render({
                elem: "#paramTable",
                id: 'paramTable',
                data: tableData,
                totalRow: true,
                title: '销售单',
                toolbar: '#toolbarDemo',
                defaultToolbar: ['filter', 'exports', 'print'],
                page: false,
                loading: false,
                even: false,
                cols: [[
                    { title: '序号', type: 'numbers' },
                    { field: 'mq', title: '商品规格', edit: 'text', minWidth: 300, totalRowText: '合计：' },
                    { field: 'dw', title: '单位', edit: 'text', maxWidth: 80 },
                    { field: 'sl', title: '数量', edit: true, maxWidth: 100, totalRow: true },
                    { field: 'dj', title: '单价', edit: 'text' , maxWidth: 100},
                    { field: 'je', title: '金额', totalRow: '{{= parseInt(d.TOTAL_NUMS) }} 元', edit: true, maxWidth: 100},
                    { field: 'bz', title: '备注', edit: 'text',  maxWidth: 100 },
                    { fixed: 'right', title: '操作', width: 134, minWidth: 125, align: 'center', toolbar: '#barDemo' },
                    // {field: 'tempId',title:'操作', align:'center', fixed:'right',templet:function (d){
                    //         return '<a class="layui-btn layui-btn-xs"  lay-event="del" lay-id="'+ d.tempId +'"><i class="layui-icon layui-icon-delete"></i>删除</a>';
                    // }},
                ]]
            })
 
 
            //添加事件
            table.on('toolbar(paramTable)', function (obj) {
                var options = obj.config; // 获取当前表格属性配置项
                var checkStatus = table.checkStatus(options.id); // 获取选中行相关数据
                console.log(obj); // 查看对象所有成员
 
                // 根据不同的事件名进行相应的操作
                switch (obj.event) { // 对应模板元素中的 lay-event 属性值
                    case 'add':
                        var oldData = table.cache["paramTable"];
                        var newRow = {
                            tempId: new Date().valueOf(),
                            keyParam: '',
                            valueParam: '',
                        }
                        oldData.push(newRow);
                        table.reload('paramTable', {
                            data: oldData
                        });
                        layer.msg('增加一行');
                        break;
                    case 'delete':
                        layer.msg('删除');
                        break;
                    case 'update':
                        table.reload('paramTable', { data: oldData });
                        layer.msg('合计刷新');
                        break;
                };
            });
 
 
            //删除行
            table.on('tool(paramTable)', function (obj) {
                var data = obj.data, event = obj.event, tr = obj.tr;
                switch (event) {
                    case "del":
                        layer.confirm('真的删除吗？', function (index) {
                            obj.del();
                            layer.close(index);
                            var oldData = table.cache["paramTable"];
                            for (var i = 0; i < oldData.length; i++) {
                                row = oldData[i];
                                if (!row || !row.tempId) {
                                    oldData.splice(i, 1);    //删除一项
                                }
                                continue;
                            }
                            table.reload('paramTable', {
                                data: oldData
                            });
                        });
                }
            });
 
 
            $("#execute").click(function () {
                var paramList = JSON.stringify(table.cache["paramTable"]);
                console.log(paramList);
            });
            // 日期
        laydate.render({
            elem: '#date'
        });
        });
 
        
       
    </script>
    <script>
        layui.use(function () {
            var table = layui.table;
            // 渲染
            table.render({
                elem: '#test',
                toolbar: '#toolbarDemo',
                // … // 其他属性
            });
 
            // 头部工具栏事件
            table.on('toolbar(test)', function (obj) {
                var options = obj.config; // 获取当前表格属性配置项
                var checkStatus = table.checkStatus(options.id); // 获取选中行相关数据
                console.log(obj); // 查看对象所有成员
 
                // 根据不同的事件名进行相应的操作
                switch (obj.event) { // 对应模板元素中的 lay-event 属性值
                    case 'add':
                        layer.msg('添加');
                        break;
                    case 'delete':
                        layer.msg('删除');
                        break;
                    case 'update':
                        layer.msg('编辑');
                        break;
                };
            });
        });
    </script>
</body>
 
</html>