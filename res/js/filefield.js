var initFileinput = function () {
    initImageInput();
    initAudioinput();
};

var initImageInput = function () {
    var $field = $('.frontend-imagefield .file-loading input[type=file], input[type=file].file-loading');
    var defaultImage = $('#DEFAULT_IMAGE').val() || '';

    $field.fileinput({
        overwriteInitial: true,
        maxFileSize: 1500,
        showClose: false,
        showCaption: false,
        browseOnZoneClick: true,
        showUpload: false,
        previewFileType: 'any',
        allowedFileExtensions: ["jpg", "jpeg", "png", "gif"],
        defaultPreviewContent: '<img src="' + defaultImage + '" alt="Select Image" />',
    });

};

var initAudioinput = function () {
    var $field = $('.frontend-audiofield .file-loading input[type=file], input[type=file].file-loading');
    var defaultImage = $('#DEFAULT_IMAGE').val() || '';

    $field.fileinput({
        overwriteInitial: true,
        maxFileSize: 1000,
        showClose: false,
        showCaption: false,
        browseOnZoneClick: true,
        showUpload: false,
        previewFileType: 'any',
        allowedFileExtensions: ["mp3", "ogg", "wav"],
        defaultPreviewContent: '<img src="' + defaultImage + '" alt="Select Audio" />',
    });

};