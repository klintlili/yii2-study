<?php
use yii\helpers\Html;
use klintlili\mobileQuery\MobileAssets;

$this->title = "手机归属地查询";
MobileAssets::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
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
<?php $this->registerJs("
     $(document).ready(function(){
        var csrfToken = $('meta[name=\"csrf-token\"]').attr(\"content\");
        $('#subPhone').click(function(){
            var phone = $('#phoneText').val();
            IMOOC.GLOBAL.ajax('mobilequery/default/api', 'post', {phone: phone, _csrf: csrfToken}, 'json', IMOOC.APPS.QUERYPHONE.dataCallback);
        });
    });
",\yii\web\View::POS_END);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
