<?php include_once "tema_header.php"; ?>

    <form action="processa.php?acao=logar-se" method="post">
        <input type="email" name="email"> <br>
        <input type="password" name="senha"> <br>

        <button type="submit">Logar</button>

    </form>

<?php include_once "tema_footer.php"; ?>