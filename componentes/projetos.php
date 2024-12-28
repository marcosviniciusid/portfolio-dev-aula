<?php

$itens = [
    [
        'titulo' => 'Downtime Control',
        'finalizado' => true,
        'ano' => 2017,
        'descricao' => 'Este projeto foi desenvolvido para registrar os downtimes das plataformas de perfuração e realizar o acompanhamento deles para evitar perder dinheiro em contrato. Esse registro passa por avaliação de chefe de departamento e depois é finalizado ou solicitado correção pelo gerente da unidade.',
        'stack' => ['PHP','Javascript', 'Ajax', 'HTML', 'CSS'],
        'img' => './img/downtimecontrol.png',
    ],
    [
        'titulo' => 'FDOC',
        'finalizado' => true,
        'ano' => 2018,
        'descricao' => 'Projeto feito com Power Platform da Microsoft. Foi realizado uma migração de aplicação que era feito em PowerShell e FileServer. Essa aplicação consiste em criar pasta do colaborador com 4 subpastas, cada uma contendo grupos de permissões exclusivas.',
        'stack' => ['Power Apps', 'Power Automate', 'Sharepoint'],
        'img' => './img/fdoc.png',
    ],
    [
        'titulo' => 'eForms',
        'finalizado' => false,
        'ano' => 2024,
        'descricao' => 'Este projeto tem como objetivo digitalizar todos os formulários da empresa, para trazer insights. Consiste em uma forma de criar formulários muito rapidamente, com validações, processos e segurança.',
        'stack' => ['Power Apps','Power Automate', 'Sharepoint', 'Figma', 'Power BI', 'Analise de dados', 'Analise de processos', 'Analise de levantamento de requisitos'],
        'img' => './img/eforms.png',
    ],
];

$cores = ['fuchsia', 'lime', 'sky', 'rose', 'green', 'teal', 'purple', 'yellow'];


?>

<?php foreach ($itens as $item): ?>
<div class="bg-slate-800 rounded-lg p-3 flex items-center space-x-3">
    <div class="w-1/5 flex items-center justify-middle">
        <img src="<?= $item['img'] ?>" class="h-42 rounded-md">
    </div>
    <div class="w-4/5 space-y-3">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl w-1/2">
                <?= ($item['finalizado']) ? '✅': '🔃' ?> 
                <?= $item['titulo'] ?> 
                <span class="text-xs text-gray-400 opacity-50 italic font-normal">
                    <?php if($item['finalizado']):?>
                        (finalizado em <?= $item['ano'] ?>)
                    <?php else: ?>
                        (em desenvolvimento)
                    <?php endif; ?>
                </span>
            </h3>
            <div class="space-x-1 flex flex-wrap justify-end gap-y-1">

                <?php foreach ($item['stack'] as $posicao => $stack): ?>
                    <span class="flex items-center h-5 bg-<?= $cores[$posicao]; ?>-400 text-<?= $cores[$posicao]; ?>-900 rounded-md px-2 font-medium text-sm font-semibold text-xs"><?= $stack; ?></span>
                <?php endforeach; ?>

            </div>
        </div>
        <p class="leading-6">
            <?= $item['descricao'] ?>
        </p>
    </div>
</div>
<?php endforeach; ?>