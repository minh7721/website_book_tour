<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="public/css/checkout.css">
</head>

<body>
    <div class="container d-lg-flex">
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3"> <img src="<?= $thongTinKH['avatar'] ?>" class="pic rounded-circle" alt="">
                <p class="ps-2 name"><?php echo $thongTinKH['tenKH'] ?></p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold"><?= $chiTietTour[0]['tenTour'] ?></p>
                    <!-- <p class="fw-lighter priceX"><?= $chiTietTour[0]['giaSauGiam'] ?></p> -->
                </div>
                <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-indicators"> <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active"> <img src="<?= $chiTietTour[0]['anhDiaDiem'] ?>" class="d-block w-100"> </div>
                        <div class="carousel-item"> <img src="<?= $chiTietTour[0]['anhDiaDiem2'] ?>" class="d-block w-100"> </div>
                        <div class="carousel-item"> <img src="<?= $chiTietTour[0]['anhDiaDiem3'] ?>" class="d-block w-100"> </div>
                    </div> <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span class="visually-hidden">Previous</span>
                    </button> <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <p class="dis my-3 info"><?= $chiTietTour[0]['moTaDiaDiem'] ?></p>
                <p class="dis mb-3 updates">Mi???n ph?? d???ch v??? ????a ????n</p>
                <p class="dis mb-3 different"><?= $chiTietTour[0]['ngayBatDau'] ?> - <?= $chiTietTour[0]['ngayKetThuc'] ?></p>
                <div class="dis">
                    <p class="pastel"><span class="fas fa-arrow-right mb-3 pe-2"></span>Qu???c gia: <?= $chiTietTour[0]['quocGia'] ?></p>
                    <p class="black"><span class="fas fa-arrow-right mb-3 pe-2"></span>Kh??ch s???n: <?= $chiTietTour[0]['tenKS'] ?></p>
                    <p class="white"><span class="fas fa-arrow-right mb-3 pe-2"></span>Ph????ng ti???n: <?= $chiTietTour[0]['tenPhuongTien'] ?> </p>
                </div>
                <div>
                    <p class="dis footer my-3">H??y th?????ng th???c k??? ngh??? m???t c??ch tr???n v???n nh???t!</p>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Chi ti???t thanh to??n</p>
                    <p class="dis mb-3">??i???n th??ng tin thanh to??n</p>
                </div>
                <form action="">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email </p> <input idKH="<?php echo $thongTinKH['idKH'] ?>" class="form-control emailKH" disabled type="email" value="<?= $thongTinKH['emailKH'] ?>">
                    </div>
                    <div>
                        <p class="dis fw-bold mb-2">S??? th??? ng??n h??ng</p>
                        <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                            <div class="fab fa-cc-visa ps-3"></div> <input type="text" class="form-control" placeholder="Card Details">
                            <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY"> <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV"> </div>
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">T??n ch??? th???</p> <input required class="form-control" type="text">
                        </div>
                        <div class="address">
                            <div class=" my-3">
                                <p class="dis fw-bold mb-2">S??? l?????ng ng?????i</p>
                                <input required class="form-control slNguoi" type="number" value="1" min="1" max="999">
                            </div>
                            <div class="my-3">
                                <p class="dis fw-bold mb-2">M?? gi???m gi??</p> <input class="form-control text-uppercase" type="text" placeholder="Nh???p m?? gi???m gi??" value="" id="discount">
                            </div>
                            <div class="d-flex flex-column dis">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>T???ng chi ph??</p>
                                    <p class="priceX tongChiPhi" money="<?= $chiTietTour[0]['giaSauGiam'] ?>"><?= $chiTietTour[0]['giaSauGiam'] ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="d-flex align-items-center">
                                        <p class="pe-2">Gi???m gi??<span class="d-inline-flex align-items-center justify-content-between bg-light px-2 couponCode"> <span id="code" class="pe-2"></span> <span class="fas fa-times close"></span> </span> </p>
                                    </div>
                                    <p class="priceX">0</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>VAT<span>(20%)</span></p>
                                    <p class="priceX thueVAT" money="<?= ($chiTietTour[0]['giaSauGiam']) * 20 / 100 ?>"><?= ($chiTietTour[0]['giaSauGiam']) * 20 / 100 ?></p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p class="fw-bold">Total</p>
                                    <p money="<?= $chiTietTour[0]['giaSauGiam'] + $chiTietTour[0]['giaSauGiam'] * 20 / 100 ?>" lastMoney="<?= $chiTietTour[0]['giaSauGiam'] + $chiTietTour[0]['giaSauGiam'] * 20 / 100 ?>" class="fw-bold priceX giaCuoiCung"><?= $chiTietTour[0]['giaSauGiam'] + $chiTietTour[0]['giaSauGiam'] * 20 / 100 ?></p>
                                </div>
                                <button idTour="<?= $chiTietTour[0]['idTour'] ?>" class="btn btn-primary mt-2 btnThanhToan">Thanh to??n</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        var valcode = document.querySelector("#discount")
        var namecode = document.querySelector("#code")
        namecode.textContent = valcode.value

        var closeBtn = document.querySelector(".close")
        var couponCode = document.querySelector(".couponCode")
        closeBtn.addEventListener("click", function() {
            close()
        })
        valcode.addEventListener("change", function() {
            checkDiscountCoupon()
        })

        function checkDiscountCoupon() {
            if (valcode.value.length === 0) {
                // namecode.style.display = "none"
                close()
            } else {
                couponCode.classList.remove("d-none")
                namecode.style.display = "inline"
                namecode.textContent = valcode.value
            }
        }

        function close() {
            couponCode.classList.add("d-none")
            valcode.value = ""
        }

        dauChamSo();

        function dauChamSo() {
            let arr = Array.from(document.getElementsByClassName("priceX"));
            const hashText = (str) => {
                let strReverse = str.trim().split("").reverse();
                let result = "";
                strReverse.forEach((char, index) => {
                    if (index % 3 == 0) {
                        result += ".";
                    }
                    result += char;
                });
                let strResult = result
                    .split("")
                    .reverse()
                    .join("")
                    .slice(0, result.length - 1);
                return strResult.toString();
            };

            arr.forEach((element) => {
                element.textContent = hashText(element.textContent);
            });
        }
    </script>


    <script>
        $(document).ready(function() {
            $('.slNguoi').on('change', function() {
                const tongChiPhi = parseFloat($('.tongChiPhi').attr('money'));
                const thueVAT = parseFloat($('.thueVAT').attr('money'));
                const giaCuoiCung = parseFloat($('.giaCuoiCung').attr('money'));
                var slNguoi = $(this).val();
                if (slNguoi <= 0) {
                    $('.slNguoi').val(1);
                    slNguoi = 1;
                }
                if (slNguoi >= 1000) {
                    $('.slNguoi').val(999);
                    slNguoi = 999;
                }
                if (Math.floor(slNguoi) == slNguoi && $.isNumeric(slNguoi)) {
                    $('.tongChiPhi').html(tongChiPhi * slNguoi);
                    $('.thueVAT').html(thueVAT * slNguoi);
                    $('.giaCuoiCung').html(giaCuoiCung * slNguoi);
                    $('.giaCuoiCung').attr('lastMoney', giaCuoiCung * slNguoi);
                    dauChamSo();
                } else {
                    $('.slNguoi').val(Math.round(slNguoi));
                    slNguoi = Math.round(slNguoi);
                    if (slNguoi <= 0) {
                        $('.slNguoi').val(1);
                        slNguoi = 1;
                    }
                    if (slNguoi >= 1000) {
                        $('.slNguoi').val(999);
                        slNguoi = 999;
                    }
                    $('.tongChiPhi').html(tongChiPhi * slNguoi);
                    $('.thueVAT').html(thueVAT * slNguoi);
                    $('.giaCuoiCung').html(giaCuoiCung * slNguoi);
                    $('.giaCuoiCung').attr('lastMoney', giaCuoiCung * slNguoi);
                    dauChamSo();
                }
            })

            $('.btnThanhToan').on('click', function() {
                // const emailKH = $('.emailKH').val();
                const idKH = $('.emailKH').attr('idKH');
                const slNguoi = $(".slNguoi").val();
                const idTour = $(this).attr('idTour');
                const lastMoney = $('.giaCuoiCung').attr('lastMoney');
                const d = new Date();
                const thisDay = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + (d.getDate());
                $.ajax({
                    url: "?controller=checkout&action=datTour",
                    method: "POST",
                    data: {
                        idKH: idKH,
                        slNguoi: slNguoi,
                        idTour: idTour,
                        lastMoney: lastMoney,
                        thisDay: thisDay,
                    },
                    success: function(dt) {
                        alert('?????t tour th??nh c??ng');
                        $(location).prop('href', '?controller=customer&action=index');
                    }
                })
            })
        })
    </script>
</body>

</html>