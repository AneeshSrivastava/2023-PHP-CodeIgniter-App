<h2><?php echo $post['title']; ?></h2>
<small>Posted On: <?php echo $post['created_at']; ?></small><br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<hr>
<?php echo form_open('posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>