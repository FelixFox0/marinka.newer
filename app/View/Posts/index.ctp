<h2>My test blog</h2>
<a href="/posts/add">Add new post</a>

<div class="overflow">
<?php if(isset($data['posts'])) { ?>    
    <?php foreach ($data['posts'] as $post) { ?>
    <div class="post">
        <p><?php echo $post['title']; ?></p>
        <p><?php echo $post['content']; ?> <a href="/posts/post/<?php echo $post['id']; ?>"> Read more...</a></p>
        <div class="buttons">
        <a href="/posts/edit/<?php echo $post['id']; ?>">edit</a>
        <a href="/posts/delete/<?php echo $post['id']; ?>">delete</a> 
        </div>
    </div>
    <?php } ?>
<?php }else{ ?>
    <div>
        no posts
    </div>
<?php } ?>
</div>
