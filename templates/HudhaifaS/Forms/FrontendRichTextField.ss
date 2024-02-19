<div class="row">
    <div class="" style="margin: 0 auto;">
        <div class="text-center">
            <textarea $AttributesHTML>$ValueEntities.RAW</textarea>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function () {
        $('#{$ID}').richText({
            // uploads
            imageUpload: false,
            fileUpload: false,

            // media
            videoEmbed: false,
            useParagraph: true
        });
    });
</script>