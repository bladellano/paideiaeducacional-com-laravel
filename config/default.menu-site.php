<?php

/**
 * "text": nome do botão do menu.
 * "url": endereço externo (com http:// ou https://) ou interno do site (/qualquer-coisa).
 * "env('APP_URL')" é mesma coisa que "https://paideiaeducacional.com/".
 */

return
    [
        [
            'text' => 'INSTITUCIONAL',
            'url' => env('APP_URL') . '#sobre',
        ],
        [
            'text'    => 'CURSOS',
            'submenu' => [
                [
                    'text' => 'PROFISSIONALIZANTES',
                    'url'  => 'https://paideiaeducacional.com.br/loja_virtual/index.php',
                ],
                [
                    'text' => 'EJA FUNDAMENTAL',
                    'url'  => 'https://paideiaeducacional.ead.guru/cursos/eja-ensino-fundamental/bundle/',
                ],
                [
                    'text' => 'EJA MÉDIO',
                    'url'  => 'https://paideiaeducacional.ead.guru/cursos/eja-ensino-medio/bundle/',
                ],
                [
                    'text' => 'GRADUAÇÃO',
                    'url'  => 'https://unibtadigital.com.br/graduacoes',
                ],
                [
                    'text' => 'PÓS-GRADUAÇÃO',
                    'url'  => 'https://unibtadigital.com.br/pos-graduacoes',
                ],
                [
                    'text'    => 'TÉCNICO »',
                    'submenu' => [
                        [
                            'text' => 'SECRETARIA ESCOLAR',
                            'url'  => 'https://paideiaeducacional.ead.guru/cursos/secretaria-escolar/',
                        ],
                        [
                            'text' => 'TRANSAÇÕES IMOBILIÁRIAS',
                            'url'  => 'https://paideiaeducacional.ead.guru/cursos/tecnico-em-transacoes-imobiliaria/',
                        ],
                    ],
                ],
            ],
        ],
        [
            'text'    => 'SERVIÇOS ON-LINE',
            'submenu' => [
                [
                    'text' => 'AUTENTICIDADE DE SEU DOCUMENTO',
                    'url'  => 'https://validar-certificado.paideiaeducacional.com/',
                ],
                [
                    'text' => 'EMISSÃO 2ª VIA DO BOLETO',
                    'url'  => 'https://banco.bradesco/html/classic/produtos-servicos/mais-produtos-servicos/segunda-via-boleto.shtm',
                ],
                [
                    'text' => 'PORTAL DO ALUNO',
                    'url'  => 'https://paideiaeducacional.ead.guru/ead/account/login/?next=/ead/',
                ],
                [
                    'text' => 'BIBLIOTECA ON-LINE',
                    'url'  => 'https://bndigital.bn.gov.br/',
                ]
            ],
        ],
        [
            'text'    => 'RADIO WEB',
            'url' => 'https://www.paideiaeducacional.net/',
        ],
        [
            'text'    => 'EVENTOS',
            'url' => env('APP_URL') . '#events',
        ],
        [
            'text'    => 'SEJA NOSSO PARCEIRO',
            'url' => '/seja-nosso-parceiro',
        ],
        [
            'text'    => 'FALE CONOSCO',
            'url' => env('APP_URL') . '#fale-conosco',
        ],
    ];