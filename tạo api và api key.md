# Gửi Request bằng AJAX và Nhận API Key

## 1. Gửi Request bằng AJAX

Để gửi một request đến file `api.php` và bao gồm API key trong header, bạn có thể sử dụng jQuery AJAX như sau:

```javascript
let formData = new FormData();
for (let i = 0; i < totalVideos; i++) {
  formData.append("fileVideo[]", $(this)[0].files[i]);
}
formData.append("API_KEY", "upload_video_toi_day_hoc"); // Thêm API Key vào dữ liệu POST
$.ajax({
  url: "https://phanvanhung.toidayhoc.com/streamable/api.php", // Đường dẫn đến file api.php
  type: "POST", // Phương thức gửi request
  data: formData,
  contentType: false,
  processData: false,
  success: function (response) {
    console.log("Response from server:", response); // Xử lý phản hồi từ server
  },
  error: function (jqXHR, textStatus, errorThrown) {
    console.error("Error occurred:", textStatus, errorThrown); // Xử lý lỗi
  },
});
```

## 2. Nhận request và các biến:

- $\_POST["API_KEY"]: "upload_video_toi_day_hoc"
- Lưu key fileVideo[] vào formData và gửi qua data trong ajax.
