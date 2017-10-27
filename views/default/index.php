<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head lang="en">-->
<!--    <meta charset="UTF-8">-->
<!--    <title>手机归属地查询</title>-->
<!--    <link rel="stylesheet" href="statis/css/bootstrap.min.css"/>-->
<!--    <script src="statis/js/jquery.min.js"></script>-->
<!--    <script src="statis/js/base.js"></script>-->
<!--    <style>-->
<!--        .container {-->
<!--            width: 300px;-->
<!--        }-->
<!--        #phoneInfo {-->
<!--            display: none;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<?php
use klintlili\mobileQuery\MobileAsstes;
$this->title = "手机归属地查询";
MobileAsstes::register($this);
?>
?>
<style>
    .container {
        width: 300px;
    }
    #phoneInfo {
        display: none;
    }
</style>
    <div class="container">
        <div class="form-group">
            <label for="phoneText">请输入手机号码</label>
            <div class="input-group">
                <input type="text" id="phoneText" class="form-control"/>
                <span class="input-group-btn">
                    <button class="btn btn-default" id="subPhone">查询</button>
                </span>
            </div>
        </div>
        <table class="table" id="phoneInfo">
            <tr>
                <td>手机号码</td>
                <td id="phoneNumber"></td>
            </tr>
            <tr>
                <td>归属地</td>
                <td id="phoneProvince"></td>
            </tr>
            <tr>
                <td>运营商</td>
                <td id="phoneCatName"></td>
            </tr>
            <tr>
                <td>其他</td>
                <td id="phoneMsg"></td>
            </tr>
        </table>
    </div>
<!--</body>-->
<script>
//    $(document).ready(function(){
//        $('#subPhone').click(function(){
//            var phone = $('#phoneText').val();
//            IMOOC.GLOBAL.ajax('api.php', 'post', {phone: phone}, 'json', IMOOC.APPS.QUERYPHONE.dataCallback);
//        });
//    });
//</script>
<!--</html>-->
<?php $this->registerJs("
     $(document).ready(function(){
        $('#subPhone').click(function(){
            var phone = $('#phoneText').val();
            IMOOC.GLOBAL.ajax('api.php', 'post', {phone: phone}, 'json', IMOOC.APPS.QUERYPHONE.dataCallback);
        });
    });
",\yii\web\View::POS_END);
?>