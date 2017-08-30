<script>
    function chForm() {




        return true;
    }
</script>

<form action="brad20.php" method="get">
    <input name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="radio" name="gender" value="m" checked>Male
    <input type="radio" name="gender" value="f">Female
    <br>
    <input type="checkbox" name="like[]" value="1">打電腦
    <input type="checkbox" name="like[]" value="2">打電玩
    <input type="checkbox" name="like[]" value="3">打麻將<br>
    <input type="checkbox" name="like[]" value="4">打籃球
    <input type="checkbox" name="like[]" value="5">打毛線
    <input type="checkbox" name="like[]" value="6">打小孩<br>
    <select name="area">
        <option value="401">北屯區</option>
        <option value="402">南屯區</option>
        <option value="403">西屯區</option>
        <option value="404">中區</option>
    </select><br>
    <textarea name="memo" rows="10" cols="40"></textarea><br>
    <input type="file" name="upload" />




    <input type="submit" name="what" value="OK1">
    <input type="submit" name="what" value="OK2">
</form>
<hr>
<!-- Event ==> onXxx="處理事件(JS)" -->
<form action="brad21.php" onsubmit="return chForm();" method="get">
    <input type="text" name="account"><br>
    <input type="password" name="passwd"><br>
    <input type="submit" value="OK">
</form>

