<?php
$this->fileLayout = "Layout.php";
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Tin tức </h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th style="width:100px"
                                        class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Photo
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Hot</th>
                                    <th class="text-secondary opacity-7">
                                        <a href="index.php?controller=news&action=create" class="btn btn-primary">Add
                                            news</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $rows) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <?php if ($rows->photo != "" && file_exists("../assets/upload/news/" . $rows->photo)) : ?>
                                            <img src="../assets/upload/news/<?php echo $rows->photo; ?>"
                                                style="max-width:150px">
                                            <?php endif; ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm"><?php echo $rows->name; ?></h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">
                                            <?php if (isset($rows->hot) && $rows->hot == 1) : ?>
                                            <span class="fa fa-check"></span>
                                            <?php endif; ?>
                                        </span>
                                    </td>

                                    <td class="align-middle">
                                        <a href="index.php?controller=news&action=update&id=<?php echo $rows->id; ?>"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="" style="padding-right:30px">
                                            Edit
                                        </a>
                                        <a href="index.php?controller=news&action=delete&id=<?php echo $rows->id ?>"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="" onclick="return window.confirm('Are you sure?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                        <!-- javascript:;  -->
                    </div>
                    <style type="text/css">
                    .pagination {
                        padding: 0px;
                        margin: 0px;
                    }
                    </style>
                    <hr style="margin-top:30px">
                    <ul class="pagination" style="display:flex;align-items: center;">
                        <li class="page-item" style="margin:0 15px" style="list-style:none" class="page-link">Trang</li>
                        <?php for ($i = 1; $i <= $numPage; $i++) : ?>
                        <li class="page-item" style="margin:0 15px" style="list-style:none"><a
                                href="index.php?controller=news&p=<?php echo $i; ?>"
                                class="page-link"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>