<?php
    // 產生謎底
    function createAnswer($n){
        // 洗牌
        $poker = range(0,9);
        shuffle($poker);
        $ret = '';
        for ($i=0; $i<$n; $i++){
            $ret .= $poker[$i];
        }
        return $ret;
    }

    if (!isset($_GET['answer'])){
        $answer = createAnswer(3);
    }else{
        $answer = $_GET['answer'];
    }

    echo $answer;

?>
<form>
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
    <input name="guess" />
    <input type="submit" value="猜" />
</form>
<hr>
