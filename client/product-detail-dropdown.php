<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dropdown SASS</title>
    <link rel="stylesheet" href="./css/product-detail-dropdown.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:700">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Các sự kiện thực hiện sau html or scirpt có nhận các element của html thì phải để sau html. 
        Vì theo cấu trúc nó sẽ chạy theo thứ tự lần lượt: 
        Nếu html trc r mới chạy đến script để thực hiện chuỗi các sự kiện. Thì script phải để sau html
        Nếu đặt script trc html thì nghĩa là script chạy trc r ms đến html nên html k nhận sự kiện của cript đc -->
    <!-- <script src="Script_Demo2.js"></script> -->
</head>

<body>
    <hr class="hr-pro-detail">
    <div id="accordion" class="m-dropdown">
        <div class="btnSticky">
            <div class="e-button">
                MÔ TẢ
                <div class="e-burger">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
            <ul class="e-list">
                <li>
                    <h4>1. Thông tin chung</h4>
                </li>
                <li> <a href="#">ID: <?php echo $row_detail['id_product'] ?> </a></li>
                <li> <a href="#">Mã sản phẩm: <?php echo $row_detail['code_product'] ?> </a></li>
                <li><a href="#">Xuất Xứ: Việt Nam</a></li>
                <li><a href="#">Chất liệu: <?php echo $row_detail['material_product'] ?> </a></li>
                <li><a href="#">Màu sắc: <?php echo $row_detail['color_product'] ?> </a> </li>
                <li><a href="#">Kích thước: <?php echo $row_detail['size_product'] ?> </a></li>
                <li>
                    <h4>2. Mô tả sản phẩm</h4>
                </li>
                <li><a href="#"> <?php echo $row_detail['des_product'] ?> </a></li>
                <li><a href="#">Độ bền cao</a></li>
                <li><a href="#">Phù hợp với nhiều phong cách trang trí nội thất nhà cửa</a></li>
            </ul>
 
            <div class="e-button">
                BẢO HÀNH
                <div class="e-burger">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
            <ul class="e-list">
                <li>
                    <h4>1. Thông tin bảo hành: </h4>
                </li>
                <li>
                    <a href="#">✅ Các sản phẩm Nội Thất Minh Phong đa số đều được sản xuất tại xưởng. 
                Nội Thất Minh Phong đã kiểm tra kỹ lưỡng trước khi xuất sản phẩm.
                </a>
                </li>
                <li><a href="#">✅ Sau thời gian hết hạn bảo hành, nếu quý khách có bất kỳ yêu cầu 
                hay thắc mắc thì vui lòng liên hệ với Nội Thất Minh Phong để được hướng dẫn và giải quyết các vấn đề gặp phải.
                </a>
                </li>
                <li><a href="#">❖ Sản phẩm bằng gỗ công nghiệp MDF/MFC: 2 năm</a></li>
                <li><a href="#">❖ Sản phẩm bằng gỗ tự nhiên: 5 năm</a></li>
                <li><a href="#">❖ Sản phẩm bằng gỗ cao cấp: 10 năm</a></li>
                <li><a href="#">❖ Bảo hành ghế sofa nệm:</a></li>
                <li><a href="#">⚊ BH xẹp lún mousse ngồi: 10 năm</a></li>
                <li><a href="#">⚊ BH khung gỗ: 05 năm</a></li>
                <li><a href="#">⚊ BH lò xo và vải bọc: 02 năm</a></li>
                <li>
                    <h4>2. Chính sách đổi hàng: </h4>
                </li>
                <li><a href="#">❖ Thời gian đổi hàng</a></li>
                <li><a href="#">✅ Nội Thất Minh Phong chấp nhận hỗ trợ đổi hàng trong vòng 14 ngày kể từ ngày xuất hóa đơn.</a></li>
                <li><a href="#">❖ Điều kiện đổi hàng</a></li>
                <li><a href="#">✅ Quý khách còn giữ hóa đơn mua hàng</a></li>
                <li><a href="#">✅ Sản phẩm không có dấu hiệu hư hỏng, trầy xước, thay thế, dơ bẩn, giặt tẩy,...</a></li>
                <li><a href="#">✅ Quý khách có thể đổi sản phẩm cùng loại hoặc sản phẩm có giá trị bằng hoặc cao hơn giá trị sản phẩm đã mua.</a></li>
                <li><a href="#">✅ Mỗi sản phẩm chỉ được đổi trả 01 lần duy nhất, chi phí giao hàng (nếu có) sẽ do quý khách thanh toán.</a></li>
                <li><a href="#">❌ Không chấp nhận đổi đối với những sản phẩm giảm giá hoặc nằm trong chương trình ưu đãi.</a></li>
            </ul>
 

      
            <div class="e-button">
                VẬN CHUYỂN
                <div class="e-burger">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
            <ul class="e-list">
                <li>
                    <h4>Giao hàng tận nơi</h4>
                </li>
                <li><a href="#">Nội Thất Minh Phong cung cấp dịch vụ giao hàng tận nơi, lắp ráp và sắp xếp vị trí theo đúng ý muốn của quý khách hàng:</a></li>
                <li><a href="#">⚊ MIỄN PHÍ giao hàng đối với những đơn hàng trong huyện Đông Anh, áp dụng cho các đơn hàng trị giá trên 5 triệu.</a></li>
                <li><a href="#">⚊ Đối với khu vực các Tỉnh/Thành lân cận: Tính phí hợp lý theo dựa trên quãng đường vận chuyển.</a></li>
                <li><a href="#">⚊ Chi phí vận chuyển sẽ được nhân viên liên hệ thông báo ngay cho quý khách khi chúng tôi nhận được đơn đặt hàng.</a></li>
                <li><a href="#">⚊ Nếu bạn có bất kì thắc mắc nào, vui lòng liên hệ cho chúng tôi theo hotline: 096 190 8080</a></li>
            </ul>
 


            <div class="e-button">
                ĐÁNH GIÁ
                <div class="e-burger">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
            <ul class="e-list">
                <li><a href="#">Chưa có bài đánh giá.</a></li>
                <li><a href="#">Để viết đánh giá cho sản phẩm này bạn cần phải đăng nhập.</a></li>
            </ul>
        </div>
    </div>

    <script>
        $(function() {
            var Accordion = function(el, multiple) {
                this.el = el || {};
                this.multiple = multiple || false;

                // Variables privadas
                var links = this.el.find('.e-button');
                // Evento
                links.on('click', {
                    el: this.el,
                    multiple: this.multiple,
                }, this.dropdown)
            }

            Accordion.prototype.dropdown = function(e) {
                var $el = e.data.el;
                $this = $(this),
                    $next = $this.next();

                $next.slideToggle();
                $this.parent().toggleClass('open');


                if (!e.data.multiple) {
                    $el.find('.e-list').not($next).slideUp().parent().removeClass('open');
                    if ($(this).hasClass("open")) {
                        $(".e-list").slideUp(function() {
                            $(".e-button").removeClass("open");
                        });
                    } else {
                        $(this).addClass("open")
                    }
                };
            }

            var accordion = new Accordion($('#accordion'), false);
        });
    </script>
</body>

</html>