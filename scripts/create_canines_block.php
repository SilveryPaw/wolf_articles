<div class="canines">
    <?php foreach($result as $row)
    {?>
    <div class = "canine">
        <h1><?php echo $row["name"] ?></h1>
        <img class="canine_img" src=<?php echo $row["image_src"]; ?> alt="<?php echo $row["name"]; ?>" />
        <p><?php 
        if(strlen($row["other_info"]) > 1000)
        {
            echo mb_strimwidth($row["other_info"], 0, 1000, "...");
        }else{
            echo $row["other_info"];
        }
        ?></P>
    </div>
    <?php } ?>
</div>