<?php include_once("includes/header.php"); ?>
<?php include_once("includes/navbar.php"); ?>

<div class="container my-3">
    <div class="card shadow">

        <div class="card-header bg-success text-white fs-5">
            ระบบลงทะเบียนสมัครสมาชิก
        </div>

        <div class="card-body">

            <form action="controllers/registercode.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label class="fs-6">ลงทะเบียนหน้าที่ ระบบสั่งจองอาหารออนไลน์</label>
                            <select name="role_as" class="form-control" required>
                                <option value="">กรุณาเลือกหน้าที่</option>
                                <option value="1">1.ผู้จัดการร้านอาหาร</option><!-- 1.manager -->
                                <option value="2">2.สมาชิกหรือลูกค้า</option><!-- 2.customer -->
                                <option value="3">3.ผู้ส่งอาหาร</option> <!-- 3.rider -->
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="fs-6">ชื่อ-สกุล</label>
                            <input type="text" name="name" class="form-control" required placeholder="Enter Your Name">
                        </div>

                        <div class="mb-3">
                            <label class="fs-6">อีเมลล์</label>
                            <input type="text" name="email" class="form-control" required placeholder="Enter Your Email">
                        </div>

                        <div class="mb-3">
                            <label class="fs-6">รหัสผ่าน</label>
                            <input type="text" name="password" class="form-control" required placeholder="Enter Your Password">
                        </div>

                        <div class="mb-3">
                            <label class="fs-6">ยืนยันรหัสผ่าน</label>
                            <input type="text" name="confirm_password" class="form-control" required placeholder="Enter Your Confirm Password">
                        </div>
                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="fs-6">โทรศัพท์</label>
                            <input type="text" name="phone" class="form-control" required placeholder="Enter Your Phone">
                        </div>

                        <div class="mb-3">
                            <label class="fs-6">รูปภาพ</label>
                            <input type="file" name="photo" required class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="fs-6">ที่อยู่</label>
                            <textarea name="address" required class="form-control" rows="3"></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="active" required>
                    <input type="hidden" name="role_as" value="0" required>

                    <div class="mb-3">
                        <input type="submit" name="register_btn"  value="ลงทะเบียน" class="btn btn-success form-control">
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>

<?php include_once("includes/footer.php"); ?>