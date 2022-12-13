<?php
include_once('padrao/header.php');
include_once('padrao/navbar.php');
?>
<script type='text/javascript' src='descartes-min.js'></script>
<script type='text/javascript' src='descartesNF-min.js'></script>

<body style="margin-bottom: 0px;margin-top: 60px">
    <div id="Texto" class="d-flex text-center text-wrap flex-column mt-2">
        <hr>
        <h1>Mini-Simulado 01</h1>
        <hr>
        <div class="container">
            <h3>Questão 01</h3>
            <p>Tal e tal e tal e tal, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit veniam
                dolores assumenda dolore distinctio totam maxime deserunt, excepturi consequatur nesciunt quia? At eum
                debitis facilis perspiciatis obcaecati commodi veritatis officia!.</p>
            <img src="img\index\01.webp" alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto;">
        </div>
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Resultado
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Resultado da questão 01</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Por que a resposta é essa mais essa, Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Enim itaque quis quibusdam distinctio? Laudantium nobis placeat possimus sit voluptate
                            temporibus optio quod facere blanditiis officiis itaque ad, illum fugiat excepturi.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Download</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <!-- QUestão 02-->
        <div class="container">
            <h3>Questão 02</h3>
            <p>Tal e tal e tal e tal, Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit veniam
                dolores assumenda dolore distinctio totam maxime deserunt, excepturi consequatur nesciunt quia? At eum
                debitis facilis perspiciatis obcaecati commodi veritatis officia!.</p>
            <img src="img\index\01.webp" alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto;">
        </div>
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Resultado da Questão 2
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" onclick="My_Video()" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Resultado da questão 02</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Por que a resposta é essa mais essa, Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Enim itaque quis quibusdam distinctio? Laudantium nobis placeat possimus sit voluptate
                            temporibus optio quod facere blanditiis officiis itaque ad, illum fugiat
                            excepturi.
                            <video loop="" preload="" id="video" controls="" poster="loading.gif"
                                height="500vw">
                                <source src="../DIALOGUE.mp4" type="video/mp4">
                            </video>
                            <input id="pause" type="button" value="Pause" onclick="My_Video()"/>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="My_Video()" data-bs-dismiss="modal">fechar</button>
                            <button type="button" class="btn btn-primary" id="pause">Download</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div class="mb-5"></div>

    <?php
include_once('padrao/footer.php');
?>
<script type="text/javascript">var videopause = document.getElementById("video");function My_Video(){videopause.pause();}</script>