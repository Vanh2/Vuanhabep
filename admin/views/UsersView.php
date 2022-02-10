<?php
$this->fileLayout = "Layout.php";
?>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Bảng quản trị viên</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Ảnh
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Chức Vụ</th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    </th>
                                    <th class="text-secondary opacity-7">
                                        <a href="index.php?controller=users&action=create" class="btn btn-primary">Add
                                            user</a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $rows) : ?>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div style="width:200px;height:250px">
                                                <?php if ($rows->photo != "" && file_exists("../assets/upload/img-admin/" . $rows->photo)) : ?>
                                                <img src="../assets/upload/img-admin/<?php echo $rows->photo; ?>"
                                                    style="width:100%" class="me-3 border-radius-lg" alt="user1">
                                                <?php endif; ?>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm"><?php echo $rows->name; ?></h6>
                                                <p class="text-xs text-secondary mb-0"><?php echo $rows->email; ?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0"><?php echo $rows->position; ?></p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <span class="badge badge-sm bg-gradient-success"></span>
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold"></span>
                                    </td>
                                    <td class="align-middle">
                                        <a href="index.php?controller=users&action=update&id=<?php echo $rows->id; ?>"
                                            class="text-secondary font-weight-bold text-xs" data-toggle="tooltip"
                                            data-original-title="" style="padding-right:30px">
                                            Edit
                                        </a>
                                        <a href="index.php?controller=users&action=delete&id=<?php echo $rows->id ?>"
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
                                href="index.php?controller=users&p=<?php echo $i; ?>"
                                class="page-link"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>