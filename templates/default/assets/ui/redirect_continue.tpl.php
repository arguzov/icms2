<div class="modal_padding">
    <?php
    $messages = cmsUser::getSessionMessages();
    if ($messages){ ?>
        <div class="sess_messages">
            <?php foreach($messages as $message){ ?>
                <div class="<?php echo $message['class']; ?>"><?php echo $message['text']; ?></div>
             <?php } ?>
        </div>
    <?php } ?>
    <form action="<?php echo $redirect_url; ?>" method="post">
        <?php echo html_submit(LANG_CONTINUE); ?>
    </form>
</div>