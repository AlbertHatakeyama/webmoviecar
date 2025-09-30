<?php
    

    // VARIAVEIS DO SEO
    $title_pagina           = "Web Movie Car";

    // DEPOIMENTOS
     $depoimentos = array(
        array(
            "depoimento" => "Fiz parte do curso de Formação Para Cidadania no período de vinte e dias, e aprendi conceitos muito importantes a respeito do mercado de trabalho, tanto com atividades práticas quanto teóricas.
                                A equipe de funcionários é muito competente e o serviço fornecido também foi ótimo."
        ),
        array(
            "depoimento" => "Minha experiência na formação para cidadania foi ótima, tenho a agradecer pelo conhecimento adquirido que acredito que vai me auxiliar muito no mercado de trabalho e em outras áreas também."
        ),
        array(
            "depoimento" => "Gostei muito da experiência do Camp Pinheiros, me proporcionou a aprender muitas coisas novas, principalmente minha comunicação que era informal, mais com a Mayara e a Érica consegui desenvolver melhor minha comunicação, estou grato ao Camp Pinheiros e as orientadoras, super recomendo a todos"
        ),
        array(
            "depoimento" => "Eu gostei muito das experiências que tive aqui no camp. Aprendi muita coisa e já estou colocando em prática o que eu aprendi"
        )
    );
    
    

    // PERGUNTAS FREQUENTES
    $perguntas_frequrntes = array(
        array(
            "pergunta" => "Quem pode consumir canabidiol?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Como faço para poder tratar com a cannabis medicinal?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "O que é o CannaID?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Como funciona o tratamento?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Uso prolongado faz mal?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),
        array(
            "pergunta" => "Vicia?",
            "resposta" => "Lorem ipsum risus nam duis imperdiet consequat viverra, aliquam nostra ut lacus aliquet consectetur, porta vitae fringilla euismod tempus lacus."
        ),

    );

    include("./includes/head.php");
?>
    <section class="carroussel-banner">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">
            <div class="carousel-inner">
                <div class="carousel-item active slide-1">
                    <div class="carousel-caption d-md-block">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-left">
                                <h1>Lorem Ipsum</h1>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quo quisquam. Rerum architecto exercitationem, 
                                    dicta a sit, est accusantium atque officia eum recusandae, adipisci laboriosam aliquid incidunt soluta accusamus.
                                    <br><br>
                                    <a href="<?=$url?>/" class="btn btn-primary">Entrar em contato</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide-2">
                    <div class="carousel-caption d-md-block">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-left">
                                <h1>Lorem Ipsum</h1>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quo quisquam. Rerum architecto exercitationem, 
                                    dicta a sit, est accusantium atque officia eum recusandae, adipisci laboriosam aliquid incidunt soluta accusamus.
                                    <br><br>
                                    <a href="<?=$url?>/" class="btn btn-primary">Entrar em contato</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slide-3">
                    <div class="carousel-caption d-md-block">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="text-left">
                                <h1>Lorem Ipsum</h1>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quo quisquam. Rerum architecto exercitationem, 
                                    dicta a sit, est accusantium atque officia eum recusandae, adipisci laboriosam aliquid incidunt soluta accusamus.
                                    <br><br>
                                    <a href="<?=$url?>/" class="btn btn-primary">Entrar em contato</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon me-5" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
                <span class="visually-hidden"></span>
            </button>
        </div>
    </section>
    <!---Bem Vindo--->
    <section class="py-4" data-anime>
        <article class="container">
            <div class="row" data-anime="top">
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="text-left bemvindo my-2">
                        <h1>Bem Vindo a <b>NaturalCalm</b></h1>
                        <br>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-lg-4 col-sm-12 col-12">
                    <div class="text-left bemvindo my-2">
                        <img src="<?=$url?>/assets/imagens/logos/logo.png" alt="Logo da NaturalCalm" class="img">
                    </div>
                </div>
            </div>
        </article>
    </section>
    <hr class="line_dashed">
    <!--introdução-->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="p-4">
                        <h1 class="wow">O que são Fitocanabinoides</h1>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="my-4 p-4 titulo texto-introducao">
                        <h2>Fitocanabinoides e seus Benefícios para a Saúde</h2>
                        <p>
                            Os fitocanabinoides são substâncias naturais encontradas em plantas que têm atraído o interesse da comunidade científica por seu potencial terapêutico. Entre os mais conhecidos estão compostos que oferecem efeitos variados no corpo humano.
                        </p>
                        <ul class="pl-0">
                            <li>
                                <b>Fitocanabinoide 1</b>: Este composto é famoso por seus efeitos relaxantes e eufóricos, além de possuir propriedades medicinais como alívio da dor e controle de espasmos.
                            </li>
                            <li>
                                <b>Fitocanabinoide 2</b>: Diferentemente do primeiro, este não causa euforia e é amplamente utilizado para tratar condições como ansiedade, inflamação e convulsões, sem efeitos psicoativos.
                            </li>
                        </ul>
                        <p>
                            Os fitocanabinoides oferecem novas possibilidades no tratamento de diversas doenças, proporcionando alívio da dor, redução da inflamação e melhora da qualidade de vida de muitos pacientes. É essencial buscar orientação médica e utilizar esses compostos de forma segura e responsável.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 my-auto">
                    <div class="text-center my-4">
                        <img src="<?=$url?>assets/imagens/fundos/fundo.jpg" alt="" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="my-4 p-4 titulo texto-introducao">
                        <h2>Como os Fitocanabinoides atuam no corpo?</h2>
                        <p>
                            Nosso corpo possui um sistema chamado endocanabinoide, que regula funções como sono, apetite, humor e resposta à dor. Os fitocanabinoides interagem com esse sistema, ajudando a restaurar o equilíbrio e aliviar sintomas de diversas doenças.
                        </p>
                        <p>
                            Os fitocanabinoides podem ser utilizados para tratar uma variedade de condições médicas, incluindo:
                        </p>
                        <ul class="pl-0">
                            <li>
                                <b>Dor crônica:</b> Certos fitocanabinoides podem ajudar a aliviar a dor crônica, incluindo dores neuropáticas e causadas por inflamação.
                            </li>
                            <li>
                                <b>Náuseas e vômitos:</b> Eles são usados para reduzir náuseas e vômitos causados por tratamentos como quimioterapia.
                            </li>
                            <li>
                                <b>Espasmos:</b> Podem ajudar a controlar espasmos musculares relacionados a condições como esclerose múltipla e epilepsia.
                            </li>
                            <li>
                                <b>Ansiedade e depressão:</b> Certos fitocanabinoides mostraram potencial no tratamento de ansiedade e depressão.
                            </li>
                            <li>
                                <b>Inflamação:</b> Possuem propriedades anti-inflamatórias que podem beneficiar pessoas com doenças inflamatórias como artrite.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---Sintomas e Doenças--->
    <section class="sintomas-fundo p-5">
        <article class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 animacao animate-slide-in-left" data-animation-type="left">
                    <div class="my-4 sintomas-texto">
                        <h1>Você sofre de alguns desses sintomas ou doenças?</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 my-auto sintomas-texto animacao animate-slide-in-right" data-animation-type="right">
                    <ul id="doencas" class="p-0">
                        <?php foreach($doencas as $doenca): ?>
                            <li class="card_depoimento rounded shadow p-3 m-3 text-center position-relative">
                                <h2>
                                    <?=$doenca["doenca"]?>
                                </h2>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div id="dots_container_doencas"></div>
                </div>
            </div>
        </article>
    </section>
    <!--Beneficios-->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <div class="p-4">
                        <h1 class="wow">Benefícios médicos dos fitocanabinoides</h1>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="my-4 p-4 beneficio-texto">
                        <p>
                            Os fitocanabinoides, compostos encontrados em determinadas plantas, têm demonstrado grande potencial terapêutico em diversas áreas da saúde. Entre os principais benefícios, destacam-se o alívio da dor, a redução da ansiedade e depressão, o tratamento de epilepsia, a diminuição da inflamação, a melhora da qualidade do sono, o tratamento de náuseas e vômitos e a neuroproteção
                            <br>
                            <br>
                            Os fitocanabinoides interagem com o sistema endocanabinoide do corpo, modulando a percepção da dor, regulando o humor, controlando convulsões, reduzindo a inflamação, promovendo o sono e protegendo as células nervosas.
                        </p>
                        <p>
                            É importante ressaltar que os benefícios dos fitocanabinoides podem variar de pessoa para pessoa e que a pesquisa nessa área ainda está em desenvolvimento. A legislação sobre o uso medicinal desses compostos varia de país para país, sendo fundamental verificar a regulamentação local antes de utilizar qualquer produto que os contenha.
                            <br>
                            <br>
                            Outros benefícios potenciais dos fitocanabinoides incluem: tratamento do glaucoma, esclerose múltipla, doenças cardíacas e câncer (como tratamento adjuvante).
                            <br>
                            <br>
                            É fundamental consultar um profissional de saúde para obter informações personalizadas sobre o uso de fitocanabinoides.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="my-4">
                        <img src="<?=$url?>/assets/imagens/fundos/oleo_cannabis.jpg" alt="" class="img-fluid oleo-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explicação Detalhada-->
    <section class="services section-padding py-5">
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <h1 class="wow">O Sistema Endocanabinoide</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-25 h-100">
                    <div class="item active animacao animate-slide-in-top" data-animation-type="top" data-animation-delay="0.<?= rand(0, 4) ?>s">
                        <div class="wrap my-4">
                            <div class="con">
                                <i class="fa-solid fa-box"></i>
                                <h2>Síntese de endocanabinoides</h2>
                                <p class="text-start">
                                    Os endocanabinoides são produzidos "sob demanda", ou seja, são sintetizados quando necessário em resposta a estímulos específicos, como dor, estresse ou inflamação.
                                </p>
                            </div>
                            <div class="numb">01</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25 h-100">
                    <div class="item active animacao animate-slide-in-top" data-animation-type="top" data-animation-delay="0.<?= rand(0, 4) ?>s">
                        <div class="wrap my-4">
                            <div class="con">
                                <i class="fa-solid fa-handshake-angle"></i>
                                <h2>Liberação dos endocanabinoides</h2>
                                <p class="text-start">
                                    Após a síntese, os endocanabinoides são liberados pelas células e se difundem através da membrana celular para alcançar os receptores canabinoides localizados nas células vizinhas ou na mesma célula.
                                </p>
                            </div>
                            <div class="numb">02</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25 h-100">
                    <div class="item active animacao animate-slide-in-top" data-animation-type="top" data-animation-delay="0.<?= rand(0, 4) ?>s">
                        <div class="wrap my-4">
                            <div class="con">
                                <i class="fa-solid fa-chart-line"></i>
                                <h2>Ativação dos receptores</h2>
                                <p class="text-start">
                                    Ao se ligarem aos receptores CB1 e CB2, os endocanabinoides desencadeiam uma cascata de reações bioquímicas dentro da célula, modulando diversas funções celulares.
                                </p>
                            </div>
                            <div class="numb">03</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-25 h-100">
                    <div class="item active animacao animate-slide-in-top" data-animation-type="top" data-animation-delay="0.<?= rand(0, 4) ?>s">
                        <div class="wrap my-4">
                            <div class="con">
                                <i class="fa-solid fa-notes-medical"></i>
                                <h2>Degradação dos endocanabinoides</h2>
                                <p class="text-start">
                                    Após exercerem seu efeito, os endocanabinoides são rapidamente degradados por enzimas específicas, garantindo a rápida regulação do sistema.
                                </p>
                            </div>
                            <div class="numb">04</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php 
        if(count($perguntas_frequrntes) > 0) {
    ?>
        <section class="section-perguntas py-5">
            <article class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                    <h1 class="wow">Principais dúvidas</h1>
                </div>
                <ul class="p-0">
                    <?php
                        foreach($perguntas_frequrntes as $key=>$pergunta_frequrnte){
                    ?>
                        <li class="w-100 services rounded shadow mb-4" data-anime="button">
                            <a class="w-100 fw600 text-decoration-none p-3 d-flex align-items-center collapsed abre_fqa" type="button" data-toggle="collapse" data-target="#fqa_<?=$key + 1?>" aria-expanded="false">
                                <?=$key + 1?>. <?=$pergunta_frequrnte["pergunta"]?>
                                <i class="fa-solid fa-angle-down fa-fw fa-xl seta-perguntas ml-auto"></i>
                            </a>
                            <div id="fqa_<?=$key + 1?>" class="border_top collapse">
                                <p class="p-3">
                                    <?=$pergunta_frequrnte["resposta"]?>
                                </p>
                            </div>
                        </li>
                    <?php }; ?>
                </ul>
                <div class="text-lg-center text-md-center text-sm-center text-center my-2">
                    <a href="<?=$url?>/obrigado-whatsapp" target="_blank" class="btn btn-success text-decoration-none text-white">
                        <i class="fab fa-whatsapp mx-2"></i>Chamar no whatsapp
                    </a>
                </div>
            </article>
        </section>
    <?php }; ?>

<?php
    include("./includes/footer.php");
?>