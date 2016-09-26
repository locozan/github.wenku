<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

hello <? echo $_POST[ 'username' ] ?>, 您的密码是：<? echo $_POST[ 'password' ] ?>

</body>
</html>
<!-- <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<form id="form" action="recive.php" method="post" onsubmit="return this.validate();">
  <p>用户名：<input type="text" name="username" pattern="[a-zA-Z]{4,}" required>（长度至少 4 个英文字母）</p>
  <p>密码：<input type="password" name="password"></p>
  <p><input type="submit" vaule="提交"></p>
</form>

<script>

  
</script>

</body>
</html> -->




<!-- <!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<form id="form" action="recive.php" method="post" onsubmit="return validate( this );">
  <p>用户名：<input type="text" name="username">（长度至少 4 个英文字母）</p>
  <p>密码：<input type="password" name="password"></p>
  <p><input type="submit" vaule="提交"></p>
</form>

<script>
  function validate( form ){
    if( !/[a-zA-Z]{4,}/.test( form.username.value ) ){
      window.alert( '长度不对' );
      return false;
    }

    return true;
  }
</script>

</body>
</html> -->
<!-- <html>
<head>
  <title>效验</title>
  <meta charset="utf-8">
</head>
<body>

<form id="form" action="recive.php" method="post" onsubmit="return validate( this, form.username, /[a-zA-Z]{4,}/, '用户名长度不对' );">
  <p>用户名:<input type="text" name="username" placeholder="最少4个字符"></p>
  <p>密码:<input type="password" name="password" placeholder="阿拉伯数字"></p>
  <p><input type="submit" value="提交"><input type="reset" value="重置"></p>
</form>

<script>
  function validate( form, target, masg, Prompt ){
    if( !masg.test( target.value ) ){
      window.alert( Prompt );
      return false;
    }
    return true; 
  }
</script>
</body>
</html>  --> -->