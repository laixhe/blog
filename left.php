<div class="inform_left">
    <h2>开启历程</h2>

    <ul id="column">
        <?php foreach($columnData as $columnValue){ ?>
            <li>
                <i></i>
                <a href="/?cid=<?php echo $columnValue['id'];?>"><?php echo $columnValue['name'];?></a>
            </li>
        <?php } ?>

    </ul>
</div>