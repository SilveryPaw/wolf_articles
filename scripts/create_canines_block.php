<div class="canines_block">
    <div class="canines">
        <?php foreach($result as $row)
        {?>
        <div class = "canine">
            <a href="show_canine.php?id=<?php echo $row["id"]; ?>">
                <div class="block_name">
                    <h1><?php echo $row["name"]; ?></h1>
                    <h4><?php echo $row["lat_name"]; ?></h4>
                </div>
                <div class="image">
                    <img class="canine_img" src=<?php echo $row["image_src"]; ?> alt="<?php echo $row["name"]; ?>" />
                </div>
            </a>
        </div>
        <?php } ?>
        </div>
    <?php 
        $page_name = "canines";
        include_once 'create_pages.php'
    ?>

</div>