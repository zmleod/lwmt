<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Demo</title>
  <!-- 请勿在项目正式环境中引用该 layui.css 地址 -->
  <link href="../../../assets/css/layui.css" rel="stylesheet">
  <script src="../../../assets/js/layui.js"></script>
  <script src="../../../assets/js/jquery.min.js"></script>
</head>

<body>
  <fieldset class="layui-elem-field layui-field-title">
    <legend>新增进度</legend>
  </fieldset>
  <?php $project_id = $_GET['project_id']; ?>
  <form class="layui-form" action="">

  <input type="text" name="project_id" value="<?php echo $project_id = $_GET['project_id']; ?>" hidden="true">
    <div class="layui-form-item">
      <label class="layui-form-label">标题</label>
      <div class="layui-input-block">
        <input style="width: 300px;" type="text" name="progress_name" placeholder="" autocomplete="off" class="layui-input" lay-verify="required">
      </div>
    </div>
    <div class="layui-form-item">

      <label class="layui-form-label">完成日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="progress_date" id="progress_date" placeholder="yyyy-MM-dd" autocomplete="off" class="layui-input">
      </div>


    </div>
    <div class="layui-form-item layui-form-text">
      <label class="layui-form-label">内容</label>
      <div class="layui-input-block">
        <textarea name="progress_content" placeholder="" class="layui-textarea" rows="10" style="white-space:pre-line;"></textarea>
      </div>
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
      var laydate = layui.laydate;
      var today = new Date();
      form.on('submit(demo1)', function(data) {
        var field = data.field; // 获取表单字段值
        // 显示填写结果，仅作演示用
        $.post('../action/add_progress_action.php', JSON.stringify(data.field), function(res) {
          // 处理PHP脚本返回的结果
          if (res.code == '0') {
            alert("进度增加成功");
            window.location.href = "../project.php?project_id=<?php echo $project_id; ?>";
          }
        }, 'json');
        return false; // 阻止默认 form 跳转
      });
      // 日期
      laydate.render({
        elem: '#progress_date',
        value: today // 设置默认值为今天
      });
    });
  </script>

</body>

</html>