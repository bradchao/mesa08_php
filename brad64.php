<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        setInterval(function(){
            $.get("brad65.php", function (data, status) {
                $("#dataarea").html(data);
            });
        }, 3000);
    });

</script>


<h1>Brad Big Company</h1>
<hr />
<div id="dataarea"></div>
