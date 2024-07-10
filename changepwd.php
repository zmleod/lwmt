<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>修改密码</title>
</head>
    <?php
    if (isset($_COOKIE['lwmt_dm'])) {
    $username=$_COOKIE['lwmt_dm'];
} else
    die("未登录");
    ?>
    <script src="./assets/js/jquery.js"></script>
<link rel="stylesheet" href="./assets/css/layui.css">
    <form class="layui-form" method="post" action="./changepwd_action.php">
        <div class="layui-form-item">
          <label class="layui-form-label">账号:<?php echo $username;?></label>
          <div class="layui-input-block">
          
          </div>
        </div>
        <div class="layui-form-item">
          <label class="layui-form-label">输入新密码</label>
          <div class="layui-input-block">
            <input type="password" style="width: 150px;" name="password" required lay-verify="required" placeholder="" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <button class="layui-btn" lay-submit lay-filter="login">修改密码</button>
          </div>
        </div>
      </form>

<body>
</body>
</html>