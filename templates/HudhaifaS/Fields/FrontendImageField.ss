<div class="row">
    <div class="offset-md-3 col-md-6 col-12">
        <div class="if-preview text-center">
            <div class="file-loading">
                <input $AttributesHTML />
                <input type="hidden" name="MAX_FILE_SIZE" value="$MaxFileSize" />
                <input type="hidden" id="DEFAULT_IMAGE" value="$FileURL" />
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function () {
        initFileinput();
    });
</script>