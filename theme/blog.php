<?php
    $LOOP = [
        [
            "photo" => "brasil-real.jpg",
            "title" => "Brazilian Real Estate Investments to debut first fund based on  partnership with real estate developer",
            "link" => "brazilian-real-estate"
        ],
        [
            "photo" => "Imobiliario.jpg",
            "title" => "Gestora BREI inicia captação para Fundo Imobiliário",
            "link" => "gestora-brei-inicia-captacao-para-fundo-imobiliario"
        ],
        [
            "photo" => "capa_istoe-806x350.jpg",
            "title" => "De olho nos fundamentos",
            "link" => "de-olho-nos-fundamentos"
        ],
        [
            "photo" => "money.jpg",
            "title" => "Investidor Online",
            "link" => "investidor-online"
        ],
        [
            "photo" => "mercadoem-806x393.jpg",
            "title" => "Mercado em Construção",
            "link" => "mercado-em-construcao"
        ],
        [
            "photo" => "mat_gri01-806x393.jpg",
            "title" => "A trajetória profissional dos líderes de real estate | Vitor Bidetti",
            "link" => "a-trajetoria-profissional-dos-lideres-de-real-estate-vitor-bidetti"
        ],
        [
            "photo" => "video.jpg",
            "title" => "Crise e fundos imobiliários",
            "link" => "crise-e-fundos-imobiliarios"
        ],
        [
            "photo" => "ISTOE_DINHEIRO_BREI_Página_1-806x393.jpg",
            "title" => "Caminho aberto para os lucros",
            "link"  => "caminho-aberto-para-os-lucros"
        ]
    ];
    function DrawNews( $loop = [] )
    {
        $acc = "";
        foreach ( $loop as $key => $value ) :
            $acc .= "
                <div class=\"block-home\">
                    <figure class=\"photo-news\">
                        <img src=\"data/upload/{$value['photo']}\" alt=\"{$value['title']}\">
                    </figure>
                    <h1 class=\"news-title\">{$value['title']}</h1>
                    <a href=\"{$value['link']}\" title=\"{$value['title']}\" class=\"btn-home\">
                        Saiba mais
                    </a>
                </div>
            ";
        endforeach;
        return $acc;
    }
?>
<div class="container">
    <?= DrawNews( $LOOP ); ?>
</div>