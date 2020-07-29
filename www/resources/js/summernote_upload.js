
$('#add_draft_area').summernote({
    height: 200,
    callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0],'#add_draft_area');
        }
    }
});

$('#add_publish_area').summernote({
    height: 200,
    callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0],'#add_publish_area');
        }
    }
});

$('#edit_draft_area').summernote({
    height: 200,
    callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0],'#edit_draft_area');
        }
    }
});

$('#edit_publish_area').summernote({
    height: 200,
    callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0],'#edit_publish_area');
        }
    }
});

function uploadImage(image,summernote_id) {
    var data = new FormData();
    data.append("image", image);
    $.ajax({
        url: '<?php echo base_url("blog/uploadImages") ?>',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        success: function(url) {
            var image = $('<img>').attr('src', url);
            $(' + summernote_id + ').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}