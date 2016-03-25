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
    <title>注册</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <div class="input-group">
      <span class="input-group-addon" id="basic-addon1">@</span>
      <input type="text" class="form-control" placeholder="E-Mail" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
      <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
    </div>

</div>
    <script src="https://cdn.bootcss.com/jquery/2.1.2/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <div>
    </div>

  </body>
</html>
