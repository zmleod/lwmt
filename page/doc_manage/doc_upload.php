<html>
<?php
$baogao_bianhao = $_GET['baogao_bianhao'];
require_once './dbconfig_doc.php';



if (isset($_COOKIE['lwmt_dm'])) {
  mysql_select_db('user');
  $username = $_COOKIE['lwmt_dm'];
  $sql = "SELECT * FROM user WHERE username = '$username' limit 1";
  $result = mysql_query($sql);
  $row = mysql_fetch_array($result);

  if ($row['authority'] != "all" && $row['authority'] != "doc_edit") {
   die("没有权限");
  }
}else{
  die("没有登录");
}
?>

<body>

  <link href="../../assets/css/layui.css" rel="stylesheet" media="all">
  <script src="../../assets/js/layui.js"></script>
  <script src="../../../../assets/js/jquery.min.js"></script>
  <form action="./action/doc_upload_action.php" method="post" enctype="multipart/form-data">

    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">上传文件</label>
      <div class="layui-inline">
        <input type="file" class="layui-input" style="width:350px;" name="file" />
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">文件名称</label>
      <div class="layui-inline">
        <input type="text" placeholder="文件名称" class="layui-input" style="width:300px;" name="doc_name">
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">文件编号</label>
      <div class="layui-inline">
        <input type="text" placeholder="文件编号" class="layui-input" style="width:300px;" name="doc_number">
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">版本</label>
      <div class="layui-inline">
        <input type="text" placeholder="版本" class="layui-input" style="width:300px;" name="doc_version">
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">修订记录</label>
      <div class="layui-inline">
      <textarea name="edit_record" placeholder="" class="layui-textarea" rows="10" cols="50" style="white-space:pre-line;"></textarea>
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">编制部门</label>
      <div class="layui-inline">
        <input type="text" placeholder="编制部门" class="layui-input" style="width:300px;" name="department">
      </div>
    </div>
    <div class="layui-form-item " style="margin-top: 10px;">
      <label class="layui-form-label">生效日期</label>
      <div class="layui-input-inline layui-input-wrap">
        <div class="layui-input-prefix"> <i class="layui-icon layui-icon-date"></i> </div>
        <input type="text" name="effective_date" id="effective_date" placeholder="生效日期" autocomplete="off" class="layui-input">
      </div>
    </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
      <label class="layui-form-label">备注</label>
      <div class="layui-inline">
        <input type="text" placeholder="备注" class="layui-input" style="width:300px;" name="remark">
      </div>
    </div>

    <div id="container" style="margin-top: 10px;"></div>
    <input type="submit" class="layui-btn" name="submit" value="提交" />
  </form>
</body>
<script>
  layui.use(function() {
    var form = layui.form;
    var layer = layui.layer;
    var laydate = layui.laydate;
    var util = layui.util;
    var $ = layui.jquery;
    var today = new Date();
    laydate.render({
      elem: '#effective_date',
      value: today // 设置默认值为今天
    });
  })
</script>

</html>