<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demo</title>
  <!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
  <link href="../../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../../assets/js/layui.js"></script>
  <script src="../../../../assets/js/jquery.min.js"></script>
</head>

<body>
  <fieldset class="layui-elem-field layui-field-title">
    <legend>拉伸试验-新增数据</legend>
  </fieldset>
  <button class="layui-btn" id="addElements">添加试样</button>
  <form class="layui-form" action="">
    <div class="layui-form-item">
      <label class="layui-form-label">报告编号</label>
      <div class="layui-input-block">
        <input style="width: 300px;" type="text" name="baogao_bianhao" placeholder="" autocomplete="off" class="layui-input" lay-verify="required">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">送检日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="songjian_riqi" id="songjian_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">检测日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="jiance_riqi" id="jiance_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">报告日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="baogao_riqi" id="baogao_riqi" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
        </div>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">样品名称</label>
        <input style="width: 190px;" type="text" name="yangjian_mingcheng" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">样品类型</label>
        <input style="width: 200px;" type="text" name="yangjian_leixing" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">样品规格</label>
        <input style="width: 200px;" type="text" name="yangjian_guige" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">样品数量</label>
        <input style="width: 190px;" type="text" name="yangjian_shuliang" value="1" id="yangjian_shuliang" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">样品来源</label>
        <input style="width: 200px;" type="text" name="yangjian_laiyuan" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">批次号</label>
        <input style="width: 200px;" type="text" name="yangjian_picihao" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">委托部门</label>
        <input style="width: 190px;" type="text" name="weituo_bumen" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">委托单号</label>
        <input style="width: 200px;" type="text" name="weituo_danhao" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">取样方向</label>
        <input style="width: 200px;" type="text" name="quyang_fangxiang" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">测试标准</label>
        <input style="width: 515px;" type="text" value="GB/T 228.1 2021金属材料拉伸试验第一部分：室温试验方法" name="ceshi_biaozhun" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">温湿度</label>
        <input style="width: 200px;" type="text" name="wenshidu" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">测试项目</label>
      <div class="layui-input-block">
        <input type="checkbox" name="cb_tanxingmoliang" value="弹性模量" title="弹性模量" checked>
        <input type="checkbox" name="cb_kangla" value="抗拉强度" title="抗拉强度" checked>
        <input type="checkbox" name="cb_suxingyanshen" value="规定塑性延伸强度" title="规定塑性延伸强度" checked>
        <input type="checkbox" name="cb_duanhoushenchang" value="断后伸长率" title="断后伸长率" checked>
      </div>
    </div>
    <div class="layui-form-item">

      <label class="layui-form-label">备注</label>
      <div class="layui-input-block">
        <input type="text" name="beizhu_zhengti" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>


    <div class="layui-form-item">
      <div class="layui-inline">

        <input style="width: 100px;margin-left:110px;" type="text" name="yangjian_bianhao_1" id="yangjian_bianhao_1" placeholder="试样编号" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">

        <input style="width: 100px;" type="text" name="tanxing_moliang_1" id="tanxing_moliang_1" placeholder="E" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">

        <input style="width: 100px;" type="text" name="kangla_qiangdu_1" id="kangla_qiangdu_1" placeholder="Rm" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">

        <input style="width: 100px;" type="text" name="suxing_yanshen_1" id="suxing_yanshen_1" placeholder="Rp0.2" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">

        <input style="width: 100px;" type="text" name="duanhou_shenchang_1" id="duanhou_shenchang_1" placeholder="A%" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">

        <input style="width: 350px;" type="text" name="beizhu_1" id="beizhu_1" placeholder="备注" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div>
      <div class="layui-form-item">

        <div id="container" style="margin-top: 10px;"></div>
      </div>

      <div class="layui-form-item">
        <div class="layui-input-block">
          <button type="submit" class="layui-btn" lay-submit lay-filter="demo1">提交</button>
        </div>
      </div>
  </form>

  <script>
    layui.use(function() {
      var form = layui.form;
      var layer = layui.layer;
      var laydate = layui.laydate;
      var util = layui.util;
      var $ = layui.jquery;
      var today = new Date();



      form.on('submit(demo1)', function(data) {
        var field = data.field; // 获取表单字段值
        var php_baogao_bianhao = field.baogao_bianhao;
        // 显示填写结果，仅作演示用

        $.post('../action/add_tensile_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("数据新增成功");
            window.location.href = "./report_img_upload_tensile.php?baogao_bianhao=" + php_baogao_bianhao;
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });





      // 日期
      laydate.render({
        elem: '#songjian_riqi',
        value: today // 设置默认值为今天
      });
      laydate.render({
        elem: '#jiance_riqi',
        value: today // 设置默认值为今天
      });
      laydate.render({
        elem: '#baogao_riqi',
        value: today // 设置默认值为今天
      });



    });
    var count = 1;
    document.getElementById('addElements').addEventListener('click', function() {

      count++;

      var outerDiv = document.createElement('div');
      outerDiv.className = 'layui-form-item';


      var input1 = document.createElement('input');
      input1.type = 'text';
      input1.name = 'yangjian_bianhao_' + count;
      input1.className = 'layui-input';
      input1.style = 'width:100px;margin-left:110px; '
      input1.placeholder = '试样编号';

      var input2 = document.createElement('input');
      input2.type = 'text';
      input2.name = 'tanxing_moliang_' + count;
      input2.className = 'layui-input';
      input2.style = 'width:105px; '
      input2.placeholder = 'E';

      var input3 = document.createElement('input');
      input3.type = 'text';
      input3.name = 'kangla_qiangdu_' + count;
      input3.className = 'layui-input';
      input3.style = 'width:105px; '
      input3.placeholder = 'Rm';

      var input4 = document.createElement('input');
      input4.type = 'text';
      input4.name = 'suxing_yanshen_' + count;
      input4.className = 'layui-input';
      input4.style = 'width:105px; '
      input4.placeholder = 'Rp0.2';

      var input5 = document.createElement('input');
      input5.type = 'text';
      input5.name = 'duanhou_shenchang_' + count;
      input5.className = 'layui-input';
      input5.style = 'width:105px; '
      input5.placeholder = 'A%';

      var input6 = document.createElement('input');
      input6.type = 'text';
      input6.name = 'beizhu_' + count;
      input6.className = 'layui-input';
      input6.style = 'width:350px; '
      input6.placeholder = '备注';




      var yangjian_shuliang = document.getElementById('yangjian_shuliang');
      yangjian_shuliang.value = count;




      // 将 input 添加到对应的 内层DIV 中

      <?php
      for ($i = 1; $i <= 6; $i++) {

        echo "var innerDiv$i = document.createElement('div');

  innerDiv$i.className = 'layui-inline';";


        echo "innerDiv$i.appendChild(input$i);
  outerDiv.appendChild(innerDiv$i);";
      }
      ?>





      // 将外层 DIV 添加到容器中
      document.getElementById('container').appendChild(outerDiv);

    });
  </script>

</body>

</html>