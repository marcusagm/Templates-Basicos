<!DOCTYPE html>
<!--
    Inicia o documento indicando a linguagem do conteúdo e a direção de leitura
-->
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">

        <!--
        Seta a largura inicial da área do browser, a escala e se aceita zoom.
         - Referência na MDN: https://developer.mozilla.org/pt-BR/docs/Mozilla/Mobile/Viewport_meta_tag
        -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <!--
        Otimização para sistema de buscas
         - Referência do Google: https://support.google.com/webmasters/answer/79812?hl=en

            Title:          Título da página. É importante manter número de
                            caracteres até no máximo 63.
            Description:    Descrição do conteúdo da página, um resumo.
                            Deve conter até 153 caracteres.
            Keywords:       Palavras chaves relacionadas com o conteúdo da
                            página, é importante que algumas delas estejam em
                            títulos e tenham relevância no texto.
            Rating:         Classificação do conteúdo, por exemplo, proibído
                            para menores.
            Robots:         Controle sobre a indexação dos motores de busca.
            Author:         Nome do autor da página. Ao associar com uma página
                            do Google+, o Google irá adicionar um vinculo nos
                            resultados.
                            https://developers.google.com/structured-data/?rd=1
            Me:             Mesmo funcionamento de Author porem no padrão XFN
                            http://gmpg.org/xfn/
        -->
        <title>Marcus Maia</title>
        <meta name="description" content="Analista de sistemas especialista em tecnologias WEB e arquitetura de informação." />
        <meta name="keywords" content="Marcus Maia, Programação, PHP, Javascript, jQuery, Internet, Site, E-learning, ensino a distância, E-Commerce, E-Gov, usabilidade, UX, acessibilidade, interface" />
        <meta name="rating" content="general" />
        <meta name="robots" content="ALL" />
        <meta name="author" content="http://google.com/+marcusagm">
        <link rel="me" href="http://google.com/+marcusagm" />


        <!--
        Otimização para compartilhamento em redes sociais
        Trate esse dados para cada tipo de conteúdo ou página
         - Link de referência: http://ogp.me/
         - Link para tutorial: http://tableless.com.br/utilizando-meta-tags-facebook
         - Link de referências do Facebook: https://developers.facebook.com/docs/sharing/webmasters
         - Link de referências do Google: https://developers.google.com/+/web/snippet/#frequently-asked-questions
         - Link para referência de meta tags : https://developer.mozilla.org/pt-PT/docs/utilizando_meta_tags

            og:site_name        Nome do site
            og:url              URL para a página
            og:type             Tipo do documento
            og:locale           Linguagem do documento
            og:title            Título ao compartilhar
            og:description      Descrição que irá aparecer ao ser compartilhado
            og:image            Imagem que irá aparecer junto ao link compartilhado
        -->
        <meta property="og:site_name" content="Marcus Maia">
        <meta property="og:url" content="http://www.marcusmaia.com.br">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:title" content="">
        <meta property="og:description" content="Analista de sistemas especialista em tecnologias WEB e arquitetura de informação.">
        <meta property="og:image" content="">


        <!--
        Twitter Cards
        Otimização para compartilhamento no twitter.
         - Link de referências: https://dev.twitter.com/cards/overview
        -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@marcusagm">
        <meta name="twitter:creator" content="@marcusagm">
        <meta name="twitter:text:title" content="Marcus Maia">
        <meta name="twitter:title" content="Marcus Maia">
        <meta name="twitter:description" content="Analista de sistemas especialista em tecnologias WEB e arquitetura de informação.">
        <meta property="twitter:image" content="">


        <!--
        Favicons
         - Link de referência: http://tableless.com.br/favicons/
         - Gerador de favicons: http://www.favicon-generator.org/
        -->
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="shortcut icon" type="image/png" href="/favicon-16x16.png">
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">



        <!--
        Adicionando links alternativos
        Indica endereços de páginas com o mesmo conteúdo com formatos ou línguas
        diferentes.
         - Link de referência: https://support.google.com/webmasters/answer/189077?hl=pt-br
         - Link de referência: https://support.google.com/webmasters/answer/1663744?hl=pt-br
         - Link de referência: https://webmasters.googleblog.com/2011/09/pagination-with-relnext-and-relprev.html
         - Link de referência: https://developer.mozilla.org/en-US/docs/Web/HTML/Link_types
        -->
        <link rel="canonical" href="http://www.marcusmaia.com.br/blog/article/example" >
        <link rel="index" href="http://www.marcusmaia.com.br/blog/article/example-index" />
        <link rel="first" href="http://www.marcusmaia.com.br/blog/article/example-first" />
        <link rel="last" href="http://www.marcusmaia.com.br/blog/article/example-last" />
        <link rel="prev" href="http://www.marcusmaia.com.br/blog/article/example-prev" />
        <link rel="next" href="http://www.marcusmaia.com.br/blog/article/example-next" />
        <link rel="alternate" type="application/json" href="/json/blog/article/example">
        <link rel="alternate" type="application/rss+xml" href="/rss/blog/article/example">
        <link rel="alternate" type="application/atom+xml" href="/atom/blog/article/example">
        <link rel="alternate" hreflang="en" href="http://www.marcusmaia.com.br/en/blog/article/example" title="Título do artigo em inglês">
        <link rel="alternate" hreflang="fr" href="http://www.marcusmaia.com.br/fr//blog/article/example" title="Título do artigo em francês">
        <link rel="alternate" hreflang="it" href="http://www.marcusmaia.com.br/it/blog/article/example" title="Título do artigo em italiano">


        <!-- Importando os CSS de bibliotecas -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

        <!--
        Adicionando CSS alternativos
         - Link de referência: https://www.w3.org/Style/Examples/007/alternatives
         - Link de referência: https://developer.mozilla.org/en-US/docs/Web/CSS/Alternative_style_sheets
        -->
        <link rel="stylesheet" media="aural" href="aural.css" type="text/css" title="Versão em áudio normalmente para leitores de tela">
        <link rel="stylesheet" media="screen" href="screen.css" type="text/css" title="Tela comum">
        <link rel="stylesheet" media="print" href="print.css" type="text/css" title="Impressão">
        <link rel="alternate stylesheet" media="all" href="contrast.css" title="Alto contraste">
    </head>
    <body>


        <!-- Conteúdo da página -->



        <!-- Importando Scripts -->
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>