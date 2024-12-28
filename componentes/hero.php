<?php

$itens = [
    ['href' => 'https://x.com', 'src' => './img/twitter.png', 'alt' => 'Twitter logo'],
    ['href' => 'https://facebook.com/marcosviniciusid', 'src' => './img/facebook.png', 'alt' => 'Facebook logo'],
    ['href' => 'https://linkedin.com/in/marcosviniciusid', 'src' => './img/linkedin.png', 'alt' => 'Linkedin logo'],
    ['href' => 'https://www.youtube.com/@devprocommunity-com-br', 'src' => './img/youtube.png', 'alt' => 'Youtube logo'],
]

?>


<section class="flex gap-x-3">

    <!-- Título e descrição -->

    <div class="w-2/3">

        <h1 class="text-3xl font-bold">Oi, meu nome é Marcos!</h1>

        <p class="text-xl leading-6 mt-6">Falando um pouco sobre mim, sou um desenvolvedor web que adora criar coisas novas e aprender novas tecnologias.
            Especializado em PHP e HTML
        </p>

        <ul class="flex gap-x-3 mt-3">

            <?php foreach ($itens as $item): ?>
                <li>
                    <a href="<?= $item['href'] ?>" target="_blank" class="hover:underline">
                        <img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>">
                    </a>
                </li>
            <?php endforeach; ?>

        </ul>

    </div>

    <!-- Imagem -->

    <div class="w-1/3 flex items-center justify-center">

        <div>
            <img class="h-60 -mt-6 hover:animate-pulse" src="./img/avatar.svg" alt="Marcos Vinicius">
        </div>

    </div>

</section>