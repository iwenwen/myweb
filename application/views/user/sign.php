<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>管理员登录</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">
  <link rel="alternate icon" type="image/png" href="assets/i/favicon.png">
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <style>
  body{
           background:url("images/bg2.jpg") no-repeat;
           background-size:cover;
       }
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 40px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>普通用户注册</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-6 am-u-md-8 am-u-sm-centered">

    <form method="post" class="am-form" action="user/sign" enctype="multipart/form-data">
      <label for="user_name">用户名:</label>
      <input type="text" name="user_name" id="user_name" value="">
      <br>
      <label for="user_pwd">密码:</label>
      <input type="password" name="user_pwd" id="user_pwd" value="">
      <br />
      <label for="photo">头像:</label>
            <input type="file" name="photo"  value="">
            <br />
      <div class="am-cf">
        <input type="submit" id="signBtn" value="确认注册" class="am-btn am-btn-primary am-btn-sm am-fl">
      </div>
    </form>
    <hr>
  </div>
</div>
</body>
</html>