<?php

require_once './includes/cabecalho.inc';

?>

<div align="center">
    <h1>Opções de Pagamento</h1><br><br>
    <h4>Escolha a Forma de Pagamento</h4><br>
    <form action="../controllers/controllerVenda.php">
        <ul>
            <li>
                <input type="radio" id="boleto" name="pague">
                <label for="boleto">Boleto</label><br><br>
            </li>
            <li>
                <input type="radio" id="cartaoCredito" name="pague">
                <label for="cartaoCredito">Cartão de Crédito</label><br><br>
            </li>
        </ul>
        <input type="hidden" value="1" name="opcao">
        <input type="submit" value="Efetuar Pagamento">
    </form>
</div>

<?php

require_once './includes/rodape.inc';

?>