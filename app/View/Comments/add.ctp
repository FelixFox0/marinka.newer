<h3>Comments (<?php echo count($data['Comment']); ?>)</h3>
<?php foreach ($data['Comment'] as $value) { ?>
<div class="comment">
    <img src="/img/smile2.png" class="imgcomment"/>
    <span><?php echo $value['name']; ?></span>
    <span><?php echo $value['email']; ?></span><br/>
    <?php echo $value['comment']; ?>
</div>
<?php } ?>
<script>
    <?php foreach ($error as $key=>$er){?>
        $('#Comment<?php echo ucfirst($key); ?>').after("<div class='error danger_<?php echo $key; ?>'><?php echo $er; ?></div>");
    <?php } ?>
</script>