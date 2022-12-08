<?php
include_once('padrao/header.php');
include_once('padrao/navbar.php');
?>

<body style="margin-bottom: 160px;">
    <!--Info 2-->

    <div class="card cor2 mb-3 container mt-3 flex-wrap d-flex p-4">
        <div class="row g-0">
            <div class="col-md-4">
                <svg class="bd-placeholder-img img-fluid rounded-start" width="100%" height="250"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                        dy=".3em">Image</text>
                </svg>

            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">O site Calculo On</h5>
                    <p class="card-text">Esse site foi desenvolvido atráves do Boostrap e PHP, para servir de base do
                        conhecimento ensinado principalmente na materia de Calculo de uma Variavel, aonde ele ira ficar
                        disponivel para pesquisa sobre os conteudos de maneira em geral.</p>
                    <p class="card-text"><small class="">Desenvolvido em Dezembro de 2022</small></p>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <section>
        <div class="text-center fw-bold text-dark">
            Conceitos em geral
        </div>
    </section>
    <!--Acordeon-->
    <div class="container-xxl fw-bold mt-3">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button cor-acorde" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Conceito de derivada
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong> Derivada nada mais é: O coeficiente angular da reta tangente a f no ponto de abscissa
                            x0.</strong>

                        <p>Derivadas na Engenharia: No ramo da engenharia o uso das derivadas é bastante frequente, nas
                            construções de grande porte a derivada é usada para calcular por exemplo, o dimensionamento
                            de
                            vigas, para construção de estruturas hidráulicas, topográficas e etc. As derivadas sua usada
                            para cálculos de esforços de estruturas, cálculos de momento fletor.</p>

                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header " id="headingTwo">
                    <button class="accordion-button collapsed cor-acorde" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Conceito da Regra de L&CloseCurlyQuote;Hospital 
                        <!-- A tag "&CloseCurlyQuote;" se refere ’, por que se usarmos ela em si pode dar erro.-->
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>A Regra de L&CloseCurlyQuote;Hospital simplesmente nos diz que o limite de um quociente é igual ao limite do
                            quociente de suas derivadas, desde que as hipóteses do teorema sejam satisfeitas.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed cor-acorde" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Conceito de taxa de variação
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Se y = f(x) é uma função, então a razão pode ser interpretada como a taxa de variação da
                            variável y em relação à variável x, ou seja, esta taxa pode ser interpretada como uma forma
                            de medir "quão rápido" a variável y muda proporcionalmente à medida da variável x.

                        </p>
                    </div>
                </div>

            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed cor-acorde" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                        Teoria fundamental do cálculo
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                        collapse plugin adds the appropriate classes that we use to style each element. These classes
                        control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                        modify any of this with custom CSS or overriding our default variables. It's also worth noting
                        that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                        does limit overflow.
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body cor2">
                        <h5 class="card-title">Desnvolvido por Alunos da Faculdade Unijorge</h5>
                        <p class="card-text">Em breve.</p>
                        <a href="#" class="btn btn-danger">Saber mais</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body cor2">
                        <h5 class="card-title">Github do Projeto</h5>
                        <p class="card-text">EM Breve.</p>
                        <a href="#" class="btn btn-danger">Saber mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
include_once('padrao/footer.php');
?>