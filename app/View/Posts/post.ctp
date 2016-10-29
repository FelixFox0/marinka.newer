<div class="col-sm-12">
    <hr/>
    <h3><?php echo $data['Post']['title']; ?></h3>
    <?php echo $data['Post']['content']; ?>
    <hr/>
    <h4>Add a commets</h4>
<?php
    echo $this->Form->create('Comment');
    echo $this->Form->input('name');
    echo $this->Form->input('email');
    echo $this->Form->input('comment',['rows'=>4]);
    echo $this->Form->end('Send comment');
?>

<div id="comments">
    <h3>Comments (<?php echo count($data['Comment']); ?>)</h3>
    <?php foreach ($data['Comment'] as $value) { ?>
    <div class="comment">
        <img src="/img/smile2.png" class="imgcomment"/>
        <span><?php echo $value['name']; ?></span>
        <span><?php echo $value['email']; ?></span><br/>
        <?php echo $value['comment']; ?>
    </div>
    
<?php } ?>

</div>
</div>
<script>
    $('#CommentEmail').keyup(function() {
        $('.danger_mail').remove();
        var pattern = /^(\S+)@([a-z0-9-]+)(\.)([a-z]{2,4})(\.?)([a-z]{0,4})+$/;
        if($(this).val().search(pattern)){
            $(this).after("<div class='error danger_mail'>Pleas enter valid email addres</div>");
        }
    });
    $('#CommentName').keyup(function() {
        $('.danger_name').remove();
        if(!$(this).val().length){
            $(this).after("<div class='error danger_name'>This field can not be empty</div>");
        }
    });
    $('#CommentComment').keyup(function() {
        $('.danger_comment').remove();
        if(!$(this).val().length){
            $(this).after("<div class='error danger_comment'>This field can not be empty</div>");
        }
    });
    
    $('form').submit(function(event) {
        event.preventDefault();
        $('#CommentEmail').trigger('keyup');
        $('#CommentName').trigger('keyup');
        $('#CommentComment').trigger('keyup');
        if(!$("div").is(".error")){
            $.ajax({
                url: '/comments/add?post_id=<?php echo $data['Post']['id']; ?>',
                dataType: 'html',
                data: $('form').serialize(),
                type: 'post',
                success: function(html) {
                    $('#comments').html(html);
                    $('form').find("input[type='text'], input[type='email'], textarea").val("");
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    });
</script>