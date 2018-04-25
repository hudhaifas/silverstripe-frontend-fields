<div class="row">
    <div class="col-md-6 offset-md-3">
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