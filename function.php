<?php
// htmlのなかにphpを埋め込む際に特殊な文字が正常に表示されないことがある。それを防ぐためのコード
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}
