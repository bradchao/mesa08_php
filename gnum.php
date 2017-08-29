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

    function checkAB($a, $g){

        return '1A2B';
    }

    $result = '';
    if (!isset($_GET['answer'])){
        // 首次進入
        $answer = createAnswer(3);
    }else{
        // 已經開始猜了
        $answer = $_GET['answer'];
        $guess = $_GET['guess'];
        $result = checkAB($answer, $guess);
    }

    echo $result;

?>
<form>
    <input type="hidden" name="answer" value="<?php echo $answer; ?>">
    <input name="guess" />
    <input type="submit" value="猜" />
</form>
<hr>
