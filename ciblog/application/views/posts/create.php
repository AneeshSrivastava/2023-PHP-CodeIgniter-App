<h2><?= $title; ?></h2>
<?php echo validation_errors($Error="Error:"); ?>
<?php echo form_open('posts/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name='title' placeholder="Enter post title">
    </div>
    <br><br>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" placeholder="Enter post body"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form>