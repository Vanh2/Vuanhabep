<?php
$this->fileLayout = "Layout.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm tin tức</div>
        <div class="panel-body">
            <form method="post" enctype="multipart/form-data" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên</div>
                    <div class="col-md-10">
                        <input type="text" style="border:1px solid #ccc" name="name"
                            value="<?php echo isset($record->name) ? $record->name : "" ?>" class="form-control"
                            required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="checkbox" style="border:1px solid #ccc" id="hot" name="hot"><label
                            for="hot">Hot</label>

                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Photo</div>
                    <div class="col-md-10">
                        <input type="file" name="photo">
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Mô tả</div>
                    <div class="col-md-10">
                        <textarea
                            name="mota"><?php echo isset($record->description) ? $record->description : "" ?></textarea>
                        <script type="text/javascript">
                        CKEDITOR.replace("mota");
                        </script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Nội dung</div>
                    <div class="col-md-10">
                        <textarea
                            name="noidung"><?php echo isset($record->content) ? $record->content : "" ?></textarea>
                        <script type="text/javascript">
                        CKEDITOR.replace("noidung");
                        </script>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <input type="submit" value="Perform" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>