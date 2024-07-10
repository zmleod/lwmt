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
   
  
   <a href="./operate/add_chemcompo.php" class="layui-btn layui-btn-sm">新增数据</a>
		<div class="layui-inline" id="search_title">
    <input class="layui-input" name="baogao_bianhao_sanfang" id="baogao_bianhao_sanfang" placeholder="根据三方报告编号搜索">
  </div>
  <div class="layui-inline">
    <input class="layui-input" name="baogao_bianhao" id="baogao_bianhao" placeholder="根据报告编号搜索">
  </div>
	
	    <button type="button" class="layui-btn layui-btn-sm"  id="search" >搜索</button>
		<a href="index_chemcompo.php" class="layui-btn layui-btn-sm">重置</a>
</script> 
<script type="text/html" id="toolbar_dropdown-in_table">
 
  <a class="layui-btn layui-btn-xs" lay-event="more">操作 <i class="layui-icon layui-icon-down"></i></a>
  
</script> 
<script>
	
layui.use(
	

	
	
	function(){
  var table = layui.table;
  var form = layui.form;
	var util = layui.util;
	  var dropdown = layui.dropdown;
  
  // 根据返回数据中某个字段来判断开启该行的编辑
  var editable = function(d){
    if(d.editable) return 'text'; // 这里假设以 editable 字段为判断依据,数据表中要加入一个editable字段，只要有值就判断为可编辑
  };
  

 
  
   var inst = table.render({
    elem: '#my_table',
    
     
      
      
    
      cols: [[ 
		 {type: 'checkbox', fixed: 'left'},
         //{field:'id', title: 'ID', width:80,hide:true} ,列隐藏示例
	     {field:'yangjian_laiyuan', title: '样件来源',hide:true,edit: editable},
	     {field:'yangjian_picihao', title: '样件批次号',hide:true,edit: editable},
	     {field:'songjian_riqi', title: '送检日期', sort: true, edit: editable, width:120},
         {field:'jiance_riqi', title: '检测日期', sort: true, edit: editable, width:120},
         {field:'jiance_jigou', title: '检测机构', edit: editable, width:120},
	     {field:'yangpin_paihao', title: '样品/牌号', edit: editable, width:120},
	     {field:'yangpin_guige', title: '样品规格', edit: editable, width:120},
	     {field:'yangpin_bianhao', title: '样品编号', edit: editable, width:120},
	     {field:'baogao_bianhao', title: '报告编号', edit: editable, width:120},
	     {field:'baogao_bianhao_sanfang', title: '三方报告编号', edit: editable, width:120},
	     {field:'jiance_chengfen', title: '检测成分', edit: editable, width:120},
           {field:'Mg', title: 'Mg',  edit: editable},
           {field:'Al', title: 'Al',  edit: editable},
           {field:'Zn', title: 'Zn',  edit: editable},
           {field:'Ce', title: 'Ce',  edit: editable},
           {field:'Cu', title: 'Cu',  edit: editable},
           {field:'Fe', title: 'Fe',  edit: editable},
           {field:'Mn', title: 'Mn',  edit: editable},
           {field:'Ni', title: 'Ni',  edit: editable},
           {field:'Si', title: 'Si',  edit: editable},
           {field:'Ca', title: 'Ca',  edit: editable},
           {field:'Zr', title: 'Zr',  edit: editable},
           {field:'S', title: 'S',  edit: editable},
           {field:'Cr', title: 'Cr',  edit: editable},
           {field:'Be', title: 'Be',  edit: editable},
          {field:'beizhu', title: '备注',  edit: editable},
          {fixed: 'right', title:'操作', toolbar: '#toolbar_dropdown-in_table', width:80}
	
	]],
      cellMinWidth: 60,
        toolbar: '#toolbar_get_row_data', 
	  initSort: { // 设置初始排序
      field: 'id', // 字段名
    
       
    },
       url:'./action/table_getdata_chemcompo_action.php', // 后端数据接口
        page: true, // 是否显示分页
       limits: [15, 50, 100,150],
       limit: 50 ,// 每页默认显示的数量
   
parseData: function(res){ //将原始数据解析成 table 组件所规定的数据，res为从url中get到的数据
	    var result;
	
	    //(前端来实现)分页方法一：
	    //这是前台 用res.data接受全部数据 再根据当前页的条件从全部数据中选取一部分数据显示出来
	    if(this.page.curr){
	        //若为第二页 则curr为2 页面显示的数据就是从res.data集合数组里的 （2-1）*limit（10）=10 到 limit（10）*2=20的数据
	        result = res.data.slice(this.limit*(this.page.curr-1),this.limit*this.page.curr);
	    }
	    else{ 
	        // 一开始就是第一页 则就是 显示的数据就是从res.data集合数组里的0到limit（10）中
	        result=res.data.slice(0,this.limit);
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
  document.getElementById('search').onclick = function(){
    var baogao_bianhao_sanfang = document.getElementById('baogao_bianhao_sanfang').value;
    var baogao_bianhao = document.getElementById('baogao_bianhao').value;
    table.reload('my_table', {
      url: './action/table_search_chemcompo_action.php' // 后端搜索接口
      ,where: {
        baogao_bianhao_sanfang: baogao_bianhao_sanfang,
        baogao_bianhao: baogao_bianhao
      }
    });
  };
        // 行工具事件
  table.on('tool(my_table)', function(obj){
    var that = this;
    var data = obj.data;
    var php_id = data.id;
    var trace_yangjian_picihao = data.yangjian_picihao;
      var trace_id = data.id;
    
      
     if(obj.event === 'more'){
      // 更多下拉菜单
      dropdown.render({
        elem: that,
        show: true, // 外部事件触发即显示
        data: [
            {
          title: '追溯',
          id: 'trace'
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
          title: '删除',
          id: 'del'
        }, ],
          
        click: function(data, othis){
            
          //根据 id 做出不同操作
          if(data.id === 'trace'){
           window.location.href = '../trace_lab.php?yangjian_picihao='+trace_yangjian_picihao+'&id='+trace_id+'&exp=chemcompo_exp';
          } else if(data.id === 'view'){
            window.location.href = './operate/report_view_chemcompo.php?id='+php_id;
          }
            else if(data.id === 'edit'){
            window.location.href = './operate/report_edit_chemcompo.php?id='+php_id;
          }
            else if(data.id === 'del'){
            layer.confirm('确定删除吗?', function(index){
              obj.del();
              layer.close(index);
            
              $.ajax({         
                  url:'./action/del_row_chemcompo.php?id='+php_id,
                  type:'get',
                  dataType:"json",
                  success:function(msg){
                         if(msg.code==0){
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
 
});
	 
</script>
</body>
</html>