<?php
// Truy vấn database để lấy danh sách
// 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
include('includes/config.php');

// 2. Chuẩn bị câu truy vấn $sql
$sql = <<<EOT
    SELECT tblbrands.BrandName, COUNT(*) AS SoLuong
    FROM `tblvihicles` xe
    JOIN `tblbrands` nsx ON xe.nsx_ma = nsx.BrandsName
    GROUP BY xe.id
EOT;

// 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
$result = mysqli_query($conn, $sql);

// 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
// Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
// Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
$data = [];
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
{
    $data[] = array(
        'TenLoaiSanPham' => $row['BrandsName'],
        'SoLuong' => $row['SoLuong'] 
    );
}

// 5. Chuyển đổi dữ liệu về định dạng JSON
// Dữ liệu JSON, từ array PHP -> JSON 
echo json_encode($data);