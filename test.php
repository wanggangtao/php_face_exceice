<?php
/**
 * Created by PhpStorm.
 * User: ChrisLin3
 * Date: 2019/9/3
 * Time: 12:28
 */
require_once('admin_init.php');
//require_once('admincheck.php');
//$all_usr = repair_person::getList();
//if (isset($_GET['id'])){
//    $id = safeCheck($_GET['id']);
//}
$id=1099;
$service = repair_order::getInfoById($id);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="芝麻开发 http://www.zhimawork.com" />
    <title>公众号管理 - 预约管理</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <link rel="stylesheet" href="css/form.css" type="text/css" />
    <link rel="stylesheet" href="css/boxy.css" type="text/css" />
    <link rel="stylesheet" href="css/newlayui.css">
    <link rel="stylesheet" href="layui/css/layui.css">
    <link rel="stylesheet" href="layui/css/layui.css">
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/layer/layer.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div id="formlist" style="margin-top: 1%">
    <p >
        <span style="text-align: right;float: left;width: 140px;    padding-right: 15px;display: block;font-weight: bold;">应付金额：</span>
        服务费<span style="color: red;"><?php echo $service['repair_hand_money'];?></span>元，配件费<span style="color: red;"><?php echo $service['repair_part_money'];?></span>元，合计<input class="" style="width: 50px" type="text" name="service_money2" id="service_money2" value="<?php echo $service['pay_sum_money'];?>"/>元
    </p>
    <p>
             <span style="text-align: right;float: left;width: 140px;    padding-right: 15px;display: block;font-weight: bold;">
             <font color="#dc143c">*</font>管理员备注：</span>
        <?php
        if (empty($service['manger_remarks'])){
            echo '<textarea style="width: 60%;" id = "remarks_edit" rows="6" maxlength = "100" cols="15" placeholder="备注信息最多填写100字"></textarea>';
        }
        else{
            echo '
                      <textarea style="width: 60%;" id = "remarks_edit" rows="6" maxlength = "100" cols="15">'.$service['manger_remarks'].'</textarea>
                        ';
        }
        ?>

    </p>


    <p>
        <label>　　</label>
        <input type="submit" id="btn_editinfo" class="btn_submit" value="确定" />
        <input type="button" id="btn_cancel" class="btn_submit btn-grey" style="background-color: #cccccc" value="取消" />
    </p>
</div>

<script type="text/javascript">
    $(function(){

        $('#btn_editinfo').click(function(){
            var service_money2 = $('input[name="service_money2"]').val();
            var remarks_edit = $('#remarks_edit').val();
            if (service_money2 == ""){
                layer.alert("合计金额不能为空", {icon: 5});
                return;
            }
            if (remarks_edit == ""){
                layer.alert("备注不能为空", {icon: 5});
                return;
            }
            $.ajax({
                type: 'POST',
                data: {
                    id: <?php echo $id;?>,
                    remarks_edit: remarks_edit,
                    service_money2: service_money2
                },
                dataType: 'json',
                url: 'weixin_repair_do.php?act=editsinfo',
                beforeSend: function(){
                    $('#btn_editinfo').attr({disabled:"disabled"});
                },
                success: function (data) {
                    var code = data.code;
                    var msg = data.msg;
                    switch (code) {
                        case 1:
                            layer.alert(msg, {icon: 6, shade: false}, function (index) {
                                parent.location.reload();
                            });
                            break;
                        default:
                            layer.alert(msg, {icon: 5});
                    }
                },
                complete:function(){
                    $('#btn_editinfo').removeAttr("disabled");
                }
            });
        });

        $('#btn_cancel').click(function(){
            parent.location.reload();
        });
    });


</script>
</body>
</html>