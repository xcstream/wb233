<?
include_once('SSDB.php');
try{
    $ssdb = new SimpleSSDB('127.0.0.1', 8888);
}catch(SSDBException $e){
    die(__LINE__ . ' ' . $e->getMessage());
}
$ret = $ssdb->incr('count');
if($ret === false){
    // error!
}?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>xcstream个人空间</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <div class="list-group">
      <a href="/register.php" class="list-group-item">注册</a>
      <a href="/login.php" class="list-group-item">登录</a>
      <a href="#" class="list-group-item">待开发的功能</a>
  </div>
  </div>
  <div class="col-md-2">

  </div>

  <div>
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
    <input type="hidden" name="cmd" value="_s-xclick">
    <input type="hidden" name="hosted_button_id" value="DZVBZ639C9YXA">
    <table>
    <tr><td><input type="hidden" name="on0" value="donate">donate</td></tr><tr><td><select name="os0">
    <option value="donate 5">donate 5 $ 5.00 USD</option>
    <option value="donate 15">donate 15 $ 15.00 USD</option>
    <option value="donate 25">donate 25 $ 15.00 USD</option>
    </select> </td></tr>
    </table>
    <input type="hidden" name="currency_code" value="USD">
    <input type="image" src="https://www.paypalobjects.com/zh_XC/C2/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal——最安全便捷的在线支付方式！">
    <img alt="" border="0" src="https://www.paypalobjects.com/zh_XC/i/scr/pixel.gif" width="1" height="1">
    </form>
  </div>

</div>
    <script src="https://cdn.bootcss.com/jquery/2.1.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <div>

      访问次数 <?echo $ret?>
    </div>

  </body>
</html>
