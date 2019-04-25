<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ứng dụng chụp hình đơn giản</title>
        <style>   
        </style>
    </head>
    <body>
        <div class="booth">
            <video id="video" width="400" height="300"></video>
            <a href="#" id="capture" class="booth-capture-button">Chụp hình</a>
            <canvas id="canvas" width="400" height="300"></canvas>
        </div><!-- div.booth -->
        <script language="javascript" src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
        <script>
           
    // BƯỚC 1: KHỞI TẠO CÁC BIẾN
    var video = document.getElementById('video');
    var canvas = document.getElementById('canvas');
    var context = canvas.getContext('2d');
    var vendoUrl = window.URL || window.webkitURL;
 
    // BƯỚC 2: XỬ LÝ HIỂN THỊ WEBCAM BAN ĐẦU
    canvas.style.display = 'none'; // Ẩn thẻ canvas khi vừa tải trang
 
    // Biến chưa hình ảnh webcam tuỳ theo loại từng trình duyệt
    navigator.getMedia = navigator.getUserMedia ||
            navigator.webkitGetUserMedia ||
            navigator.mozGetUserMedia ||
            navigator.msGetUserMedia;
 
    // Hàm lấy hình ảnh webcam
    navigator.getMedia({
        video: true, // Có hình ảnh
        audio: false // Không có âm thanh
                // Hàm chèn đường dẫn webcam vào thẻ video
    }, function (stream) {
        video.src = vendoUrl.createObjectURL(stream);
        video.play(); // Phát thẻ video
        // Hàm thông báo khi xảy lỗi hoặc không hỗ trợ trên trình duyệt này
    }, function (error) {
        alert('Rất tiếc đã xảy ra lỗi, có thể do trình duyệt của bạn không hỗ trợ chức năng này hoặc trang này chưa kết nối riêng tư https.');
    });
 
    // XỬ LÝ SỰ KIỆN CLICK VÀO NÚT CHỤP ẢNH
    document.getElementById('capture').addEventListener('click', function () 
    {
        canvas.style.display = 'block'; // Hiện thẻ canas
        // In hình ảnh lên thẻ canvas ở x = 0, y = 0, width = 400, height = 300
        context.drawImage(video, 0, 0, 400, 300);
        data = canvas.toDataURL(); // Tạo một đường dẫn hình ảnh của canvas
        // Gửi dữ liệu ảnh đến file saveimg.php thông qua phương thức POST
        
    });

        </script>
    </body>
</html>