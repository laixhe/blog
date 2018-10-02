<?php
include __DIR__ .'/php/show.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title><?php echo $idInfo['title'];?>-Laixhe-享受学习与思考的乐趣</title>

    <link rel="stylesheet" href="/static/css/reset.css">
    <link rel="stylesheet" href="/static/js/layui/css/layui.css">

    <link rel="stylesheet" href="/static/common.css">
    <link rel="stylesheet" href="/static/imformation.css">

</head>
<body>

<?php include __DIR__ .'/header.php';?>

<div class="inform_wrap">
    <div class="inform container clearfix">

        <?php include __DIR__ .'/left.php';?>


        <div class="inform_right">

            <div>
                <div class="inform_con">
                    <div>
                        <span style="font-size: 16px;">
                            <?php echo $idInfo['title'];?>
                        </span>
                    </div>
                    <div>
                        <i class="layui-icon">&#xe62d;</i>
                        <i><?php echo date('Y-m-d H:i:s',$idInfo['addtime']);?></i>
                        <i>　</i>
                        <i class="layui-icon">&#xe635;</i>
                        <i><?php echo $cidData['name'];?></i>
                        <p><?php echo $idContent;?></p>
                    </div>
                </>
            </div>


        </div>

    </div>
</div>

<div style="padding: 5px;">
    <a href="http://www.miitbeian.gov.cn" target="_blank">鲁ICP备17035054号-1</a>
</div>

<script src="/static/js/jquery-1.12.4.js"></script>
<script>
    var id = <?php echo $cidData['id'];?>;
    $("#column li").eq(id-1).addClass("action");
</script>
</body>
</html>