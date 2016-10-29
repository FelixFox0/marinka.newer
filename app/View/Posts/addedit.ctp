<script src="http://cdn.ckeditor.com/4.5.11/full-all/ckeditor.js"></script>

<h2>Add/edit post</h2>
    
        <?php 
        echo $this->Form->create();
        if(isset($data['Post'])){
            echo $this->Form->input('title',['value'=>$data['Post']['title']]);
            echo $this->Form->textarea('content',['id'=>'editor1','default'=>$data['Post']['content']]);
        }else{
            echo $this->Form->input('title');
            echo $this->Form->input('content',['id'=>'editor1']);
        }
        echo $this->Form->end('Save'); ?>

<script>
    $( "form" ).submit(function(e) {
        for (instance in CKEDITOR.instances) {
            CKEDITOR.instances[instance].updateElement();
            $("input[name='data[Post][content]']").val(CKEDITOR.instances[instance]._.data);
        }
        return true;   
    });
    CKEDITOR.replace( 'editor1', {
            height: 300,
            filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
            filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?type=Images',
            filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
            filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images'
    } );
</script>