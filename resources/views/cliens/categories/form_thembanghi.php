<h1 style="text-align: center;">form thêm sản phẩm</h1>
<form method="POST" action="<?php echo route('category.addsanpham'); ?>">
    <div>
        <input type="text" name="tensanpham" placeholder="Tên sản phẩm" value="<?php echo old('tensanpham'); ?>">
        <input type="text" name="giasanpham" placeholder="Giá sản phẩm">
        <input type="hidden" name="_token" id="" value="<?php echo csrf_token(); ?>">
        <button type="submit">Cập nhật</button>
    </div>

</form>