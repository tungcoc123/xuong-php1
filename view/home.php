<div class="row mb ">
    <div class="boxtrai mr ">
        <div class="row ">
            <div class="banner">
                <!-- Slideshow container -->
                <div class="slideshow-container">

                    <!-- Full-width images with number and caption text -->
                    <div class="mySlides fade">
                        <div class="numbertext">1 / 3</div>
                        <img src="view/images/slider1.webp" style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">2 / 3</div>
                        <img src="view/images/slider2.webp" style="width:100%">
                        <div class="text">Caption Two</div>
                    </div>

                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                        <img src="view/images/slider3.webp" style="width:100%">
                        <div class="text">Caption Three</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>

                <!-- The dots/circles -->
                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                </div>
            </div>
        </div>

        <div class="row sanpham">
            <div class="row">
                <div class="tile">
                    <h1>CƠ (GẬY) BI-A </h1>
                </div>
            </div>
            <?php
            $i = 0;
            foreach ($spmoi as $sp) {
                extract($sp);
                $hinh = $hinhAnh_path . $hinhAnh;
                if (($i == 2) || ($i == 5) || ($i == 8)) {
                    $mr = "";
                } else {
                    $mr = "mr";
                }
                echo '<div class="boxsp ' . $mr . '">
               <div class="row img">
                   <img src="' . $hinh . '" alt="">
               </div> <br>
               <a href="#">' . $tenSanPham . '</a>
               <p>$' . $giaTien . '</p>
               <div class="muangay">
                   <form action="" method="post">
                       <input type="submit" value="MUA NGAY">
                   </form>

               </div>

                </div>';
                $i += 1;
            }
            ?>
            <!-- <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i2.webp" alt="">

                </div>
                <p>
                    Dragon 610 Series Ngọn K-Beta</p>
                <a href="#">17.900.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i3.webp" alt="">

                </div>
                <p>Dragon 609 Series Ngọn K-Beta</p>
                <a href="#">14.000.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i4.webp" alt="">

                </div>
                <p>Dragon 608-B3</p>
                <a href="#">9.250.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i5.webp" alt="">

                </div>
                <p>Dragon 610 Series</p>
                <a href="#">17.400.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i6.webp" alt="">

                </div>
                <p>Dragon 620 SD-1</p>
                <a href="#">31.500.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i7.webp" alt="">

                </div>
                <p>Dragon 620 SD-4</p>
                <a href="#">30.500.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i8.webp" alt="">

                </div>
                <p>Dragon Wang</p>
                <a href="#">35.000.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i9.webp" alt="">

                </div>
                <p>Dragon 620SD-3</p>
                <a href="#">21.200.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div>
            <div class="boxsp mr">
                <div class="row img">
                    <img src="view/images/i10.webp" alt="">

                </div>
                <p>Dragon 620 SM Series</p>
                <a href="#">20.000.000₫</a>
                <div class="muangay">
                    <form action="" method="post">
                        <input type="submit" value="MUA NGAY">
                    </form>

                </div>

            </div> -->


            <div class="row ">
                <div class="xemthem "><a href="#">Xem thêm</a></div>
                <div class="row mb">
                    <div class="bannerphu">
                        <a href="#"> <img src="view/images/box1_banner1.webp" alt=""></a>
                    </div>
                    <div class="bannerphu1">
                        <a href="#"> <img src="view/images/box1_banner2.webp" alt=""></a>
                    </div>
                    <div class="bannerphu1">
                        <a href="#"> <img src="view/images/box1_banner3.webp" alt=""></a>
                    </div>

                </div>
            </div>
            <div class="row mb">
                <div class="tile">
                    <h1>BAO ĐỰNG CƠ (GẬY) </h1>
                </div>
                <div class="linklist">
                    <ul>
                        <li><a href="#">2 chuôi 3 ngọn</a></li>
                        <li><a href="#">2 chuôi 4 ngọn</a></li>
                    </ul>

                </div>
                <div class="gach mb10"> </div>
                <div class="xemthem ">
                    <a href="#">Xem thêm</a>
                </div>
                <div class="tile">
                    <h1>PHỤ KIỆN ĐI KÈM </h1>
                </div>
                <div class="linklist ">
                    <ul>
                        <li><a href="#">Găng tay</a></li>
                        <li><a href="#">Lơ</a></li>
                        <li><a href="#">Các loại khác</a></li>
                    </ul>

                </div>
                <div class="row ">
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/g1.webp" alt="">

                        </div>
                        <p>Dragon 620 SD-4</p>
                        <a href="#">30.500.000₫</a>
                        <div class="muangay">
                            <form action="" method="post">
                                <input type="submit" value="MUA NGAY">
                            </form>

                        </div>

                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/g2.webp" alt="">

                        </div>
                        <p>Dragon Wang</p>
                        <a href="#">35.000.000₫</a>
                        <div class="muangay">
                            <form action="" method="post">
                                <input type="submit" value="MUA NGAY">
                            </form>

                        </div>

                    </div>
                    <div class="boxsp mr">
                        <div class="row img">
                            <img src="view/images/g3.webp" alt="">

                        </div>
                        <p>Dragon 620SD-3</p>
                        <a href="#">21.200.000₫</a>
                        <div class="muangay">
                            <form action="" method="post">
                                <input type="submit" value="MUA NGAY">
                            </form>

                        </div>

                    </div>

                    <div class="row  ">
                        <div class="xemthem "><a href="#">Xem thêm</a></div>
                        <div class="row mb">
                            <div class="bannerphu3">
                                <a href="#"> <img src="view/images/box3_banner1.webp" alt=""></a>
                            </div>
                            <div class="bannerphu2">
                                <a href="#"> <img src="view/images/box3_banner2.webp" alt=""></a>
                            </div>
                            <div class="bannerphu2">
                                <a href="#"> <img src="view/images/box3_banner3.webp" alt=""></a>
                            </div>

                        </div>
                        <div class="row mb">
                            <div class="row">
                                <div class="tile">
                                    <h1>BÀN BI-A </h1>
                                </div>
                                <div class="linklist">
                                    <ul>
                                        <li><a href="#">Bàn Aplus</a></li>

                                    </ul>

                                </div>
                                <div class="gach mb"> </div>
                                <div class="xemthem ">
                                    <a href="#">Xem thêm</a>
                                </div>

                            </div>
                            <div class="row mb ">
                                <div class="bannerphu3">
                                    <a href="#"> <img src="view/images/box4_banner1.webp" alt=""></a>
                                </div>
                                <div class="bannerphu2">
                                    <a href="#"> <img src="view/images/box4_banner2.webp" alt=""></a>
                                </div>
                                <div class="bannerphu2">
                                    <a href="#"> <img src="view/images/box4_banner3.webp" alt=""></a>
                                </div>

                            </div>
                            <div class="row">
                                <div class="tile">
                                    <h1>NỈ </h1>
                                </div>
                                <div class="linklist">
                                    <ul>
                                        <li><a href="#">Thương hiệu CPBA</a></li>

                                    </ul>

                                </div>
                                <div class="gach mb"> </div>
                                <div class="xemthem ">
                                    <a href="#">Xem thêm</a>
                                </div>

                            </div>





                        </div>

                    </div>
                </div>
            </div>

        </div>








    </div>
    <div class="boxphai  ">
        <div class="row mb ">
            <div class="boxtieude">TÀI KHOẢN</div>
            <div class="boxnoidung taikhoan">
                <form action="dangnhap" method="post">
                    <div class="row mb10">
                        Tên đăng nhập <br>
                        <input type="text" name="user" id=""><br>
                    </div>
                    <div class="row mb10"> Mật khẩu <br>
                        <input type="password" name="pass" id=""><br>
                    </div>
                    <div class="row mb10">
                        <input type="checkbox" name="" id=""> Ghi nhớ tài khoản <br>
                    </div>
                    <div class="row mb10">
                        <input type="submit" name="submit" value="Đăng nhập">
                    </div>
                    <li>
                        <a href="#">Quên Mật khẩu</a>
                    </li>
                    <li>
                        <a href="#">Đăng kí thành viên</a>
                    </li>

                </form>

            </div>
        </div>
        <div class="row mb ">
            <div class="boxtieude">DANH MỤC </div>
            <div class="boxnoidung2 menudoc">
                <ul>
                    <?php
                    foreach ($dsdm as $key => $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=sanpham&iddm=" . $id;
                        echo '<li> 
                        <a href="' . $linkdm . '">' . $tenDanhMuc . '</a>
                        </li>';
                    }
                    ?>
                    <!-- <li><a href="#">Dragon</a></li>
                    <li><a href="#">Maple</a></li>
                    <li><a href="#">David Potts</a></li>
                    <li><a href="#">Fury</a></li>
                    <li><a href="#"> Mit</a></li>
                    <li><a href="#">Jacoby</a></li>
                    <li><a href="#">GẬY PHÁ, NHẢY</a></li> -->

                </ul>
            </div>
            <div class="boxfooter timkiem">
                <form action="#" method="post">
                    <input type="text" placeholder="Nhập vào tìm kiếm">
                </form>
            </div>
        </div>
        <div class="row mb">
            <div class="boxtieude">TOP 10 YÊU THÍCH</div>
            <div class="row boxnoidung">
                <?php
                foreach ($dstop10 as $sp) {
                    extract($sp);
                    $linksp = "index.php?act=sanphamct&idsp=" . $id;
                    $hinhAnh = $hinhAnh_path . $hinhAnh;

                    echo '<div class="row mb10 top10">
                    <img src="' . $hinhAnh . '" alt="">
                    <a href="' . $linksp . '">' . $tenSanPham . '
                    </a>
                </div>';
                }

                ?>
                <!-- <div class="row mb10 top10">
                    <img src="view/images/i2.webp" alt="">
                    <a href="#">David Potts MT Series ngọn K-Beta
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i3.webp" alt="">
                    <a href="#">Dragon 610 Series Ngọn K-Beta

                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i4.webp" alt="">
                    <a href="#">Dragon Jun
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i5.webp" alt="">
                    <a href="#">Dragon 608-B3
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i6.webp" alt="">
                    <a href="#">Dragon 610 Series
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i7.webp" alt="">
                    <a href="#">Tempest AE
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i8.webp" alt="">
                    <a href="#">Maple CPD
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i9.webp" alt="">
                    <a href="#">Maple LG-05 Ngọn K-Beta
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/i10.webp" alt="">
                    <a href="#">David Potts MT SERIES
                    </a>
                </div>
                <div class="row mb10 top10">
                    <img src="view/images/box1_banner1.webp" alt="">
                    <a href="#">Dragon 609 Series
                    </a>
                </div> -->
            </div>

        </div>


    </div>
</div>

hjbvfmn gjhkdhgWS80 BKDS