<?php
    include 'header.php';
    include 'config.php';
    $ID = $_GET['id'];
    $sql = "SELECT * from  drugs where id = '$ID'";
    $result_current = mysqli_query($conn, $sql);
    $row_current = mysqli_fetch_assoc($result_current);
?>
<main class= "container mt-5 ">
    <h2 class="mb-3">Nhập thông tin của thuốc:</h2>
    <form action="process_sua.php?id=<?php echo $_GET['id']?>" method="post">
        <div class="mb-3 row">
            <label for="id" class="col-sm-2 col-form-label">Mã : </label>
            <div class="col-sm-10">
                <input type="text" disabled value="<?php echo $row_current['id'] ?>" class="form-control"  name="Id">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">TÊN thuốc: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['name'] ?>" class="form-control"  name="Name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Loại thuốc: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['type'] ?>" class="form-control"  name="Type">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="barcode" class="col-sm-2 col-form-label">Mã vạch: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['barcode'] ?>" class="form-control" name="Barcode">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dose" class="col-sm-2 col-form-label">Liều lượng: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['dose'] ?>" class="form-control"  name="Dose">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="code" class="col-sm-2 col-form-label">Mã thuốc: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['code'] ?>" class="form-control"  name="Code">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cost_price" class="col-sm-2 col-form-label">Giá nhập: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['cost_price'] ?>" class="form-control"  name="Cost_price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="selling_price" class="col-sm-2 col-form-label">Giá bán: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['selling_price'] ?>" class="form-control" name="Selling_price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="expiry" class="col-sm-2 col-form-label">Trạng thái hạn sử dụng:</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['expiry'] ?>" class="form-control"  name="Expiry">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="company_name" class="col-sm-2 col-form-label">Công ty: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['company_name'] ?>" class="form-control" name="Company_name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="production_date" class="col-sm-2 col-form-label">Ngày sản xuất: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['product_date'] ?>" class="form-control" name="Production_date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['expiration_date'] ?>" class="form-control" name="Expiration_date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="place" class="col-sm-2 col-form-label">Nơi sản xuất: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['place'] ?>" class="form-control" name="Place">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="quantity" class="col-sm-2 col-form-label">Số lượng: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['quanlity'] ?>" class="form-control" name="Quantity">
            </div>
        </div>
       
        

        <div class="mb-3 row">
            <button name="btnLuu" type="submit" class="btn btn-success">Lưu lại</button>
        </div>
    </form>
</main>

<?php
include 'footer.php';
?>