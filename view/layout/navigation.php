<div class="col-3">
    <nav class="nav">
        <p class="nav-headline">لیست بخش های پنل کاربری</p>
        <ul>
            <?php
                if (Authentication :: check()) {
                    if (Authorization :: checkRole('admin')) {
                        echo '
                            <li class="nav-label" ><i class="fa fa-users" aria-hidden="true"></i><a href="users.php">لیست کاربران</a></li>
                            <li class="nav-label" ><i class="fa fa-add" aria-hidden="true"></i><a href="addaccount.php">اضافه کردن کاربر جدید</a></li>
                            <li class="nav-label" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="productlist.php">لیست محصولات</a></li>
                            <li class="nav-label" ><i class="fa fa-add" aria-hidden="true"></i><a href="add-product.php">افزودن محصولات</a></li>
                            <li class="nav-label" ><i class="fa fa-message" aria-hidden="true"></i><a href="messages.php">پیام ها</a></li>
                            <hr>
                        ';
                    }
                }
            ?>
            <!-- <li class="nav-label" ><i class="fa fa-shopping-cart" aria-hidden="true"></i><a href="products.php">محصولات</a></li> -->
            <!-- <li class="nav-label" ><i class="fa fa-sms" aria-hidden="true"></i><a href="contact.php">تماس با ما</a></li> -->
            <li class="nav-label" ><i class="fa fa-user" aria-hidden="true"></i><a href="profile.php">پروفایل</a></li>
            <li class="nav-label" ><i class="fa fa-user" aria-hidden="true"></i><a href="editProfile.php">ویرایش پروفایل</a></li>
            <li class="nav-label" ><i class="fa fa-ticket" aria-hidden="true"></i><a href="ticket.php">تیکت</a></li>

        </ul>
    </nav>
</div>