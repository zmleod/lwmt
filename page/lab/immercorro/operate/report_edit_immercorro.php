<!DOCTYPE html>
<html>

<head>

  <?php
  require_once '../../dbconfig_lab.php';
  $baogao_bianhao = $_GET['baogao_bianhao'];

  $query = "SELECT * FROM immercorro_exp where baogao_bianhao = '$baogao_bianhao'";
  // 执行查询
  $sql = mysql_query($query);

  $row = mysql_fetch_array($sql);

  ?>
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
    <legend>浸泡腐蚀-编辑数据</legend>
  </fieldset>


  <form class="layui-form" action="">
    <div class="layui-form-item">
      <label class="layui-form-label">报告编号</label>
      <div class="layui-input-block">
        <input style="width: 300px;" type="text" name="baogao_bianhao" value="<?php echo $row['baogao_bianhao']; ?>" placeholder="" autocomplete="off" class="layui-input" lay-verify="required">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">送检日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="songjian_riqi" id="songjian_riqi" value="<?php echo $row['songjian_riqi']; ?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">试验日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="shiyan_riqi" id="shiyan_riqi" value="<?php echo $row['shiyan_riqi']; ?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
        </div>
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">报告日期</label>
        <div class="layui-input-inline layui-input-wrap">
          <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
          <input type="text" name="baogao_riqi" id="baogao_riqi" value="<?php echo $row['baogao_riqi']; ?>" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
        </div>
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">温度(℃)</label>
        <input style="width: 190px;" type="text" name="wendu" value="<?php echo $row['wendu']; ?>" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">湿度</label>
        <input style="width: 200px;" type="text" name="shidu" value="<?php echo $row['shidu']; ?>" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">样品数量</label>
        <input style="width: 200px;" type="text" name="yangjian_shuliang" value="<?php echo $row['yangjian_shuliang']; ?>" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <div class="layui-inline">
        <label class="layui-form-label">试验项目</label>
        <input style="width: 190px;" type="text" name="shiyan_xiangmu" value="<?php echo $row['shiyan_xiangmu']; ?>" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">试验设备</label>
        <input style="width: 200px;" type="text" name="shiyan_shebei" value="<?php echo $row['shiyan_shebei']; ?>" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
      <div class="layui-inline">
        <label class="layui-form-label">试验条件</label>
        <input style="width: 200px;" type="text" name="shiyan_tiaojian" value="<?php echo $row['shiyan_tiaojian']; ?>" id="" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">试验标准</label>
      <div class="layui-input-block">
        <input style="width: 515px;" type="text" name="shiyan_biaozhun" value="<?php echo $row['shiyan_biaozhun']; ?>" placeholder="" autocomplete="off" class="layui-input">
      </div>
    </div>
    <div class="layui-form-item">
      <label class="layui-form-label">试验结果备注</label>
      <div class="layui-input-block">
        <textarea name="beizhu_zhengti" value="<?php echo $row['beizhu_zhengti']; ?>" placeholder="" class="layui-textarea"> <?php echo $row['beizhu_zhengti']; ?> </textarea>
      </div>
    </div>




    <?php

    $result = mysql_query($query);
    $i = 1;
    while ($get_row = mysql_fetch_assoc($result)) {
      echo
        ' <div>
    <div class="layui-inline">
 
    
        <div class="layui-inline">
          <input type="text" style="display: none;" value="' . $get_row['id'] . '" name="id_' . $i . '" >
      <label class="layui-form-label">样品名称</label>
      <input style="width: 100px;" type="text" value="' . $get_row['yangjian_mingcheng'] . '" name="yangjian_mingcheng_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
       <div class="layui-inline">
      <label class="layui-form-label">样品类型</label>
      <input style="width: 100px;" type="text" value="' . $get_row['yangjian_leixing'] . '" name="yangjian_leixing_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
       <div class="layui-inline">
      <label class="layui-form-label">样品规格</label>
      <input style="width: 100px;" type="text" value="' . $get_row['yangjian_guige'] . '" name="yangjian_guige_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
       <div class="layui-inline">
      <label class="layui-form-label">样品编号</label>
      <input style="width: 100px;" type="text" value="' . $get_row['yangjian_bianhao'] . '" name="yangjian_bianhao_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
     <div class="layui-inline">
      <label class="layui-form-label">样品来源</label>
      <input style="width: 100px;" type="text" value="' . $get_row['yangjian_laiyuan'] . '" name="yangjian_laiyuan_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
         <div class="layui-inline">
      <label class="layui-form-label">样品批次号</label>
      <input style="width: 100px;" type="text" value="' . $get_row['yangjian_picihao'] . '" name="yangjian_picihao_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
           <div class="layui-inline">
      <label class="layui-form-label">浸没时间</label>
      <input style="width: 100px;" type="text" value="' . $get_row['jinmo_shijian'] . '" name="jinmo_shijian_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div> 
               <div class="layui-inline">
      <label class="layui-form-label">浸没前质量(g)</label>
      <input style="width: 100px;" type="text" value="' . $get_row['zhongliang_jinmoqian'] . '" name="zhongliang_jinmoqian_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div> 
    
    
    
    
           <div class="layui-inline">
      <label class="layui-form-label">腐蚀前质量(g)</label>
      <input style="width: 100px;" type="text" value="' . $get_row['zhongliang_jinmohou'] . '" name="zhongliang_jinmohou_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
    
              <div class="layui-inline">
      <label class="layui-form-label">去除腐蚀产物后质量(g)</label>
      <input style="width: 100px;" type="text" value="' . $get_row['zhongliang_jinmohou'] . '" name="zhongliang_jinmohou_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
                 <div class="layui-inline">
      <label class="layui-form-label">失重量(g)</label>
      <input style="width: 100px;" type="text" value="' . $get_row['shizhongliang'] . '" name="shizhongliang_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
                 <div class="layui-inline">
      <label class="layui-form-label">平均腐蚀速度</label>
      <input style="width: 100px;" type="text" value="' . $get_row['pingjun_fushi_sulv'] . '" name="pingjun_fushi_sulv_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
    
    
    <div class="layui-inline">
      <label class="layui-form-label">备注</label>
      <input style="width: 350px;" type="text" value="' . $get_row['beizhu'] . '" name="beizhu_' . $i . '" placeholder="" autocomplete="off" class="layui-input">
    </div>
  </div>';
      $i++;
    }

    ?>










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


      form.on('submit(demo1)', function(data) {
        var field = data.field; // 获取表单字段值
        // 显示填写结果，仅作演示用

        $.post('../action/report_edit_immercorro_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("数据编辑成功");
            window.location.href = "../index_immercorro.php";
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });





      // 日期
      laydate.render({
        elem: '#songjian_riqi'
      });

      laydate.render({
        elem: '#shiyan_riqi'
      });
      laydate.render({
        elem: '#baogao_riqi'
      });
    });
  </script>
</body>

</html>