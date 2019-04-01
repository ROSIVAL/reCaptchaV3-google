<?
define('SITE_KEY', '6LdQFJsUAAAAAItR0HN5PzXPTsgWL3pZLqJZLpSO');
define('SECRET_KEY', '6LdQFJsUAAAAAFyweW66_X8GoYysjA-2lYBK1EEa');

if($_POST){
    function getCaptcha($secretKey){
        $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$secretKey}");
        $return = json_decode($response);
        return $return;
    }
    $return = getCaptcha($_POST['g-recaptcha-response']);
    var_dump($return);
    if($return->success == true && $return->score > 0.5){
        print  "<h1>Enviado com sucesso!</h1>";
    }else{
        print "<h1>Você é um Robô!!</h1>";
    }
}


// var_dump($_POST);

?>