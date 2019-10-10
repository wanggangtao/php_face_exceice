<?php
/**
 * Created by PhpStorm.
 * User: 王刚涛
 * Date: 2019/8/12
 * Time: 10:14
 */
require_once "admin_init.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>我的预约</title>
    <link rel="stylesheet" href="static/css/basic.css" />
    <link rel="stylesheet" href="static/css/style.css" />
    <link rel="stylesheet" href="static/css/query.css" />
    <script src="static/js/jquery.min.js"></script>
    <script src="static/layer/layer.js"></script>
    <script type="text/javascript">
        function test() {
            var order_id=1099;
            var remarks_edit="哈哈哈哈";
            var service_money2=10;
            $.ajax({
                type: 'POST',
                data: {
                    id: order_id,
                    remarks_edit: remarks_edit,
                    service_money2: service_money2
                },
                dataType: 'json',
                url: 'weixin_repair_do.php?act=editsinfo',
                },
                success: function (data) {
                    layer.close(index);
                    var code = data.code;
                    var msg = data.msg;
                    switch (code) {
                        case 1:
                            layer.alert(msg, {icon: 6}, function () {
                                location.reload();
                            });
                            break;
                        default:
                            layer.alert(msg, {icon: 5});
                    }
                }
            });
            }
    </script>
</head>
<body>
<div id="app">
    <div class="coupon" style="background-color: #f6f6f6">
        <div class="coupon_tab">
            <button onclick="test()"></button>
        </div>
    </div>
</div>
</body>
</html>
