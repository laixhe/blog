<?php
require dirname(__DIR__).'/php/base.php';

// 获取栏目数据
$columnData = Service::getInstance()->Column()->get();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>栏目数据</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/js/layui/css/layui.css"  media="all">

</head>
<body>

<fieldset class="layui-elem-field layui-field-title" style="margin-top: 10px;">
    <legend>栏目数据</legend>
</fieldset>

<table class="layui-table" lay-even="" lay-skin="row">
    <colgroup>
        <col width="150">
        <col width="150">
        <col width="200">
        <col>
    </colgroup>
    <thead>
    <tr>
        <th>栏目名</th>
        <th>别名</th>
        <th>ID</th>
        <th>操作</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach ($columnData as $v){ ?>
    <tr>
        <td><?php echo $v['name'];?></td>
        <td><?php echo $v['as'];?></td>
        <td><?php echo $v['id'];?></td>
        <td><?php echo $v['id'];?></td>
    </tr>
    <?php } ?>

    </tbody>
</table>

<script src="/static/js/layui/layui.js" charset="utf-8"></script>

</body>
</html>