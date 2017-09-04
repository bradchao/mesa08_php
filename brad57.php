<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    function ckAccount() {
        var account = $("#account").val();
        $.get("brad62.php?account="+account, function (data,status) {
            if (data>0){
                $("#mesg").html("帳號已存在...");
                $("#account").focus();
            }else{
                $("#mesg").html("");
            }
        });
    }
</script>
<form action="brad56.php" onsubmit="">
    Account: <input id="account" onblur="ckAccount()" name="account" />
    <span id="mesg"></span><br>
    Password: <input type="password" name="passwd" /><br>
    Real name: <input name="realname" /><br>
    <input type="submit" value="Add" />
</form>