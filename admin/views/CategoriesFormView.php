<?php
$this->fileLayout = "Layout.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Thêm danh mục sản phẩm</div>
        <div class="panel-body">
            <form method="post" action="<?php echo $action; ?>">
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Tên</div>
                    <div class="col-md-3">
                        <input type="text" style="border:1px solid #ccc" name="name"
                            value="<?php echo isset($record->name) ? $record->name : "" ?>" class="form-control"
                            required>
                    </div>
                </div>
                <!-- end rows -->
                <!-- rows -->
                <div class="row" style="margin-top:5px;">
                    <div class="col-md-2">Parent</div>
                    <div class="col-md-10">
                        <?php
                        $category_id = isset($record->id) ? $record->id : 0;
                        $categories = $this->modelCategories($category_id);
                        ?>
                        <select name="parent_id" class="form-control" style="border:1px solid #ccc">
                            <option value="0"></option>
                            <?php foreach ($categories as $rows) : ?>
                            <option <?php if (isset($record->id) && $record->parent_id == $rows->id) : ?> selected
                                <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                            <?php endforeach; ?>
                        </select>
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
                    <div class="col-md-3">
                        <input type="submit" value="Perform" class="btn btn-primary">
                    </div>
                </div>
                <!-- end rows -->
            </form>
        </div>
    </div>
</div>