<?php
    if (!isset($_GET['editid'])) header("Location:brad55.php");

    $editid = $_GET['editid'];
    $sql = "SELECT * FROM member WHERE id={$editid}";

    $mysqli = new mysqli('localhost','root','root','iii');
    $result = $mysqli->query($sql);
    $data = $result->fetch_object();


?>
<script>
    function ckAccount() {
        var account = $("#account").val();
        var id = $("#id").val();
        $.get("brad63.php?account="+account+"&id="+id , function (data,status) {
            if (data>0){
                $("#mesg").html("帳號已存在...");
                $("#account").focus();
            }else{
                $("#mesg").html("");
            }
        });

    }
</script>
<h1>Edit Member</h1>
<form action="brad59.php">
    <input type="hidden" id="id" name="id" value="<?php echo $editid; ?>">
    Account: <input name="account" onblur="ckAccount()" value="<?php echo $data->account; ?>"/>
    <span id="mesg"></span>
    <br>
    Password: <input type="password" name="passwd" /><br>
    Real name: <input name="realname" value="<?php echo $data->realname; ?>" /><br>
    <input type="submit" value="Update" />
</form>