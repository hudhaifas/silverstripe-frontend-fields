var initFileinput = function () {
    var $field = $('.file-loading input[type=file], input[type=file].file-loading');
    var defaultImage = $('#DEFAULT_IMAGE').val() || '';

    $field.fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseOnZoneClick: true,
        showUpload: false,
        previewFileType: 'any',
        allowedFileExtensions: ["jpg", "png", "gif"],
        defaultPreviewContent: '<img src="' + defaultImage + '" alt="Select Image" />',
    });

};