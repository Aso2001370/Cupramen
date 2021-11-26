<?php require 'header.php';?>
<h1>ログインしてください</h1>
<form method="post" action="login-out.php" class="login">
    <p>
        メールアドレス:<input type="text" name="mail" value="">
    </p>
    <p>
        Password:<input type="password" name="pass" value="">
    </p>
    <p><a href="Membership.php">新規会員登録はこちらから</a></p>
    <p>
        <button type="submit" >ログイン</button>
    </p>
</form>
<?php require 'footer.php'; ?>
