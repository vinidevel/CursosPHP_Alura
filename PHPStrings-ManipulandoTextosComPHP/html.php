
<?php 
$nome = 'campo';
?>

<input type="text" name="<?php echo $nome; ?>"  />

<!-- Imagina que dentro do "nome" o usuário digitou aspas ou algo do tipo. O que acontece? Quando eu executar, o meu código vai estar invalido, o meu código HTML vai estar inválido, porque, eu tenho em nome="campo"uma abertura de aspas solta e, pior, o usuário pode até injetar código. Por exemplo, ele pode colocar “/>” e colocar um código JavaScript “<script>”, por exemplo, alert("teste") -->

<!-- Ex:
$nome = 'campo" /> <script> alert("test");</script>'; -->

<!-- Repare que eu preciso me preocupar com esses detalhes. Existem algumas funções que nos ajudam com esses detalhes. Uma delas é o addslashes. O que essa função faz? Ele adiciona para nós uma barra invertida, ou seja, ele escapa, ela adiciona aquele caractere de escapar em tudo que precisa ser escapado, que no caso são aspas duplas, aspas simples, barra invertida, um caractere de finalização de string ou caractere nulo. Ele adiciona uma barra invertida nisso. -->


<?php 
$nome = 'campo" /> <script> alert("test");</script>';
?>

<input type="text" name="<?php echo htmlentities($nome); ?>"  />

<!-- Não tem mais perigo de eu estar executando esse código HTML se eu não quiser, porque ele era um atributo, não era para executar, eu me livrei desse problema. Essas funções, de novo, fazem muito sentido quando integramos o PHP na Web, por exemplo -->



