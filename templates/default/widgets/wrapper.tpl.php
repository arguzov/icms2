<div class="widget<?php if ($widget['class_wrap']) { ?> <?php echo $widget['class_wrap'];  } ?>">
    <?php if ($widget['title'] && $is_titles){ ?>
        <h4 class="title<?php if ($widget['class_title']) { ?> <?php echo $widget['class_title'];  } ?>">
            <?php echo $widget['title']; ?>
            <?php if (!empty($widget['links'])) { ?>
                <div class="links">
                    <?php $links = string_parse_list($widget['links']); ?>
                    <?php foreach($links as $link){ ?>
                        <a href="<?php echo (strpos($link['value'], 'http') === 0) ? $link['value'] : href_to($link['value']); ?>">
                            <?php echo $link['id']; ?>
                        </a>
                    <?php } ?>
                </div>
            <?php } ?>
        </h4>
    <?php } ?>
    <div class="body<?php if ($widget['class']) { ?> <?php echo $widget['class'];  } ?>">
        <?php echo $widget['body']; ?>
    </div>
</div>