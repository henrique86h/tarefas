<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafeteria</title>
    <link rel="stylesheet" href="cafeteria.css">
</head>
<body>

<?php
$produtosCafe = [
	[
    'nome' => "Café Cremoso",
    'descricao' => "Café cremoso irresistivelmente suave e que envolve seu paladar",
    'preco' => "5.00",
    'imagem' => "img/cafe-cremoso.png",
    'classificacao' => 4
	],
	[
    'nome' => "Café com Leite",
    'descricao' => "A harmonia do café e do leite, uma experiência reconfortante",
    'preco' => "2.00",
    'imagem' => "img/cafe-com-leite.png",
    'classificacao' => 1
	],
  [
    "nome" => "Cappuccino",
    "descricao" => "Café suave, leite cremoso e uma pitada de sabor adocicado",
    "preco" => "7.00",
    "imagem"=> "img/cappuccino.png",
    'classificacao' => 5
  ],
  [
    "nome" => "Café Gelado",
    "descricao" => "Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.",
    "preco" => "3.00",
    "imagem"=> "img/cafe-gelado.png",
    'classificacao' => 4
  ]
];
	
$produtosAlmoco = [
	[
    "nome" => "Bife",
    "descricao" => "Bife, arroz com feijão e uma deliciosa batata frita",
    "preco" => "27.90",
    "imagem" => "img/bife.jpg"
  ],
  [
    "nome" => "Filé de peixe",
    "descricao" => "Filé de peixe salmão assado, arroz, feijão verde e tomate.",
    "preco" => "24.99",
    "imagem" => "img/file-de-peixe.jpg"
  ],
  [
    "nome" => "Frango",
    "descricao" => "Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante",
    "preco" => "23.00",
    "imagem" => "img/frango.jpg"
  ],
  [
    "nome" => "Fettuccine",
    "descricao" => "Prato italiano autêntico da massa do fettuccine com peito de frango grelhado",
    "preco" => "22.50",
    "imagem" => "img/fettuccine.jpg"
  ]
];
?>

<div class="container-cafe-manha-produtos">
<?php foreach ($produtosCafe as $cafe):?>
<div class="container-produto">
<div class="container-foto">
<img src="<?= $cafe['imagem'] ?>">
</div>
<p><?= $cafe['nome'] ?></p>
<p><?= $cafe['descricao'] ?></p>
<p><?= "R$ " . $cafe['preco'] ?></p>

<?php
$cafe['classificacao'];

    $i = 0;
    while($i<$cafe['classificacao']):
        echo "☕";
        $i++ ;
        if ($i++ == 5) break;

    endwhile;
?>
</div>
<?php endforeach; ?>
</div>

<hr>
<hr>
<hr>

<div class="container-almoco-produtos">
<?php foreach ($produtosAlmoco as $almoco):?>
<div class="container-produto">
<div class="container-foto">
<img src="<?= $almoco['imagem'] ?>">
</div>
<p><?= $almoco['nome'] ?></p>
<p><?= $almoco['descricao'] ?></p>
<p><?= "R$ " . $almoco['preco'] ?></p>
</div>
<?php endforeach; ?>
</div>

</body>
</html>