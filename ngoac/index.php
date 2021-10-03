<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <input type="text" name="inp">
    <button>Check</button>
</form>
</body>
</html>
<?php
$stack=new SplStack();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $inp=$_POST['inp'];
    for ($i=0;$i<strlen($inp);$i++){
        if ($inp[$i]=='('){
            $stack->push(1);
        }
        if ($inp[$i]==')'){
            $stack->pop();
        }
    }
    if ($stack->isEmpty()){
        echo 'True';
    }else{
        echo 'False';
    }
}
?>