<?php
function viewuploadform()
{
    if (isset($_SESSION["auth"])) {
        echo '
        <!-- File upload form-->
        <form method="post" enctype="multipart/form-data" id="fileupload">
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="files[]" id="customFile" multiple required>
                <label class="custom-file-label" for="customFile" data-browse="Choose">select files</label>
                <small class="form-text text-muted">
                    Maximum file size: <?php echo UPLOAD_MAX_SIZE / 1000000; ?>Мb.
                    Acceptable formats: <?php echo implode(', ', ALLOWED_TYPES) ?>.
                </small>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Upload file</button>
        </form>
        ';
    }
}