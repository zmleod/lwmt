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
  <form action="./action/form_upload_action.php" method="post" enctype="multipart/form-data">

    <div class="layui-form-item" style="margin-top: 10px;">
    <label class="layui-form-label">上传表单</label>
      <div class="layui-inline">
        <input type="file" class="layui-input" style="width:350px;" name="form" />
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
    <label class="layui-form-label">表单名称</label>
      <div class="layui-inline">
        <input type="text" placeholder="表单名称" class="layui-input" style="width:300px;" name="form_name">
      </div>
    </div>
    <div class="layui-form-item" style="margin-top: 10px;">
    <label class="layui-form-label">表单编号</label>
    <div class="layui-inline">
      <input type="text" placeholder="表单编号" class="layui-input" style="width:300px;" name="form_number">
    </div>
  </div>

    <div class="layui-form-item" style="margin-top: 10px;">
    <label class="layui-form-label">上级文件</label>
    <div class="layui-inline">
      <input type="text" placeholder="上级文件编号" class="layui-input" style="width:300px;" name="doc_number">
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


</html>