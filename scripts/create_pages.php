<?php if($pages_count > 1) { ?>
<div class = "pages">
        <?php for($i = 0; $i < $pages_count; $i++) { 
            if($i == $page - 1) 
            { ?>
                <a class="current_page"><?php echo ($i + 1); ?></a>
            <?php 
            }
            else
            { ?>
                <a class="page" href="<?php echo $GLOBALS["absolute_path"] . "/" . $page_name; ?>.php?page=<?php echo ($i + 1); ?>"><?php echo ($i + 1); ?></a>
            <?php
            }
        } ?>
    </div>
<?php } ?>