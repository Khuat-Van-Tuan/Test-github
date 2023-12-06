<form method="POST" action="/tuan-test">
    <div>
        <input type="text" id="iptuan1" name="iptuan1">
        <input type="date" id="iptuan2" name="iptuan2">
        <input type="hidden" name="_method" value="put">
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
        <button type="submit">Cập nhật</button>
    </div>
</form>