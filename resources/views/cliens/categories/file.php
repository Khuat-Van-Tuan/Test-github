<h1 style="text-align: center;">upload file</h1>
<form method="POST" action="<?php echo route('category.upload'); ?>" enctype="multipart/form-data">
    <div>
        <input type="file" name="photo" id="">
        <!-- <input type="text" name="tensanpham" placeholder="Tên sản phẩm" value="<?php echo old('tensanpham'); ?>">
        <input type="text" name="giasanpham" placeholder="Giá sản phẩm">
        <input type="hidden" name="_token" id="" value="<?php echo csrf_token(); ?>"> -->
    </div>
        <?php echo csrf_field(); ?>
        <button type="submit">upload</button>

</form>