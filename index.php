<?php
include __DIR__ .'/php/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>享受学习与思考的乐趣-Laiki</title>

    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/js/layui/css/layui.css">

    <link rel="stylesheet" href="static/common.css">
    <link rel="stylesheet" href="static/imformation.css">

</head>
<body>

<?php include __DIR__ .'/header.php';?>

<div class="inform_wrap">
    <div class="inform container clearfix">

        <?php include __DIR__ .'/left.php';?>

        <div class="inform_right">

            <div>

                <h4 style="display: none;"><?php echo $columnData['name'];?></h4>

                <?php foreach ($columnDirData as $vData){ ?>
                <div class="inform_con">
                    <div>
                        <span>
                            <a href="/show.php?id=<?php echo $vData['id'],'&cid=',$vData['cid'];?>" style="font-size: 16px;font-weight: bold;">
                                <?php echo $vData['title'];?>
                            </a>
                        </span>
                    </div>
                    <p>
                        <i class="layui-icon">&#xe62d;</i>
                        <i><?php echo date('Y-m-d H:i:s',$vData['addtime']);?></i>
                        <i>　</i>
                        <i class="layui-icon">&#xe635;</i>
                        <i><?php echo $vData['cidstr'];?></i>
                    </p>
                </div>
                <?php } ?>

            </div>

            <div class="inform_bottom" style="display: none;">
                <a href="javascript:;" class="prev first">上一页</a>
                <span>&nbsp;</span>
                <a href="javascript:;" class="select">1</a>
                <a href="javascript:;" class="select">2</a>
                <a href="javascript:;" class="select">3</a>
                <a href="javascript:;" class="select">4</a>
                <a href="javascript:">...</a>
                <a href="javascript:;" class="select last">60</a>
                <span>&nbsp;</span>
                <a href="javascript:;" class="next">下一页</a>
            </div>

        </div>

    </div>
</div>

<div style="padding: 5px;">
    <a href="http://www.miitbeian.gov.cn" target="_blank">鲁ICP备17035054号-1</a>
</div>

<script src="static/js/jquery-1.12.4.js"></script>
<script>
    var id = <?php echo $cidData['id'];?>;
    $("#column li").eq(id-1).addClass("action");
</script>
</body>
</html>