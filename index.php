<?php
include './php/index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <title>Laixhe</title>

    <link rel="stylesheet" href="static/css/reset.css">
    <link rel="stylesheet" href="static/js/layui/css/layui.css">

    <link rel="stylesheet" href="static/common.css">
    <link rel="stylesheet" href="static/imformation.css">

</head>
<body>

<div class="head-wrapper">

    <div class="container clearfix">

        <div class="left fl">

            <a href="/">
                <i class="layui-icon">&#xe68e;</i>
                Laixhe
            </a>

        </div>

        <div class="right fr">

            <div class="user-box">

                <img src="static/images/me.jpg" alt="用户名">

                <div class="user">

                    <div class="user-content">
                        <a class="user-name" href="javascript:alert('现在还没开工！')">赖炳松</a>

                        <div class="user-list clearfix" style="display: none;">
                            <a href="javascript:;">
                                <i class="layui-icon">&#xe612;</i>
                                <span>GitHub</span>
                            </a>
                            <a href="javascript:;">
                                <i class="layui-icon">&#xe652;</i>
                                <span>GitHub</span>

                            </a>
                            <a href="javascript:;">
                                <i class="layui-icon">&#xe65e;</i>
                                <span>GitHub</span>

                            </a>
                            <a href="javascript:;">
                                <i class="layui-icon">&#xe698;</i>
                                <span>GitHub</span>

                            </a>
                        </div>

                    </div>

                    <a class="exit" href="javascript:alert('现在还没开工！')">关于我</a>
                </div>

            </div>

            <a class="register" href="https://github.com/laixhe" target="_blank">GitHub</a>

        </div>

    </div>

</div>

<div class="inform_wrap">
    <div class="inform container clearfix">

        <div class="inform_left">
            <h2>开启历程</h2>

            <ul id="column">
                <?php foreach($columnData as $columnValue){ ?>
                <li>
                    <i></i>
                    <a href="?name=<?php echo $columnValue['name'];?>"><?php echo $columnValue['name'];?></a>
                </li>
                <?php } ?>

            </ul>
        </div>

        <div class="inform_right">

            <div>

                <h4 style="display: none;"><?php echo $columnNameData['name'];?></h4>

                <?php foreach ($columnDirData as $vData){ ?>
                <div class="inform_con">
                    <div>
                        <span>
                            <a href="" style="font-size: 16px;font-weight: bold;">
                                <?php echo $vData['title'];?>
                            </a>
                        </span>
                    </div>
                    <p>
                        <i class="layui-icon">&#xe62d;</i>
                        <i><?php echo date('Y-m-d H:i:s',$vData['addtime']);?></i>
                        <i>　</i>
                        <i class="layui-icon">&#xe635;</i>
                        <i><?php echo $vData['typestr'];?></i>
                    </p>
                </div>
                <?php } ?>

            </div>

            <div class="inform_bottom">
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
    var id = <?php echo $columnNameData['id'];?>;
    $("#column li").eq(id-1).addClass("action");
</script>
</body>
</html>