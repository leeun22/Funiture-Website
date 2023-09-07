/*** JS QUANTITY ***/
// amout: số lượng
// Biến t1 nhận gtri thẻ id của input [text]. Biến t2 nhận gtri value của thẻ input [text]
let amountElement = document.getElementById('quantity')
let amount = amountElement.value
    // console.log(amount)

// Hàm hiển thị dữ liệu ở input [text], cập nhật value mới
let render = (amount) => {
    amountElement.value = amount
}

// Tạo hàm HandlePlus gán bằng chuỗi rỗng, sau đó hàm thực hiện các câu lệnh:
let handlePlus = () => {
    // amount--: amount = amount + 1
    amount++
    // Cập nhật lại biến amount ở input trên
    render(amount);
}

// Handle Minus
let handleMinus = () => {
    if (amount > 1)
        amount--;
    render(amount);
}

// Bắt sự kiện: trong input khi nhập vào kí tự số nguyên (int) thì mới xuất ra dl
amountElement.addEventListener('input', () => {
    amount = amountElement.value;
    // parseInt: chuyển dl về số nguyên (nếu ng dg nhập dạng text sẽ trở thành NaN)
    amount = parseInt(amount);
    // ĐK Phức: Khi ng dùng nhập vào dạng text thì chuyển về một gtri là 1, số 0 thì cx chuyển về 1, ngược lại sẽ nhận amount mới
    amount = (isNaN(amount) || amount == 0) ? 1 : amount;
    render(amount);
    // console.log(amount);
});