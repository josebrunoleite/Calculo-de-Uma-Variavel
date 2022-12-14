<?php
include_once('padrao/header.php');
include_once('padrao/navbar.php');
?>
<script type='text/javascript' src='descartes-min.js'></script>
<script type='text/javascript' src='descartesNF-min.js'></script>

<body style="margin-bottom: 0px; margin-top: 60px">
    <div id="Texto" class="d-flex text-center text-wrap flex-column mt-2">
        <hr>
        <h1>Exercício</h1>
        <hr>
        <div class="container">
            <h3>Questão 01</h3>
            <p>Resolva a Seguinte derivada.</p>
            <img src="https://cdn.discordapp.com/attachments/952954997665058828/1050836789939666944/image.png"
                alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto; width: auto;height: auto;">
        </div>
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Resultado da Questão 1
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
                            <img src="https://media.discordapp.net/attachments/1006716643512172666/1050873984436154449/image.png"
                                alt="Banner" height="350px" width="1030" class="d-flex mt-1" style="margin: 0 auto; width: -webkit-fill-available;">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <hr>
        <!-- QUestão 02-->
        <div class="container">
            <h3>Questão 02</h3>
            <p>Resolva a Seguinte derivada.</p>
            <img src="https://media.discordapp.net/attachments/952954997665058828/1050838112349208576/image.png"
                alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto; width: auto;height: auto;">
        </div>
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Resultado da Questão 2
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" onclick="My_Video()"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Resultado da questão 02</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://media.discordapp.net/attachments/1051206841125842964/1051213189620191373/image.png"
                                alt="Banner" height="450px" width="1030" class="d-flex mt-1" style="margin: 0 auto; width: -webkit-fill-available;">
                            <hr>
                            <h2>Vídeo Explicativo</h2>
                            <video loop="" preload="" id="video" controls="" poster="loading.gif" height="500vw">
                                <source src="img/s-derivada.mp4" type="video/mp4">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="My_Video()"
                                data-bs-dismiss="modal">fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <!-- QUestão 03-->
            <div class="container">
                <h3>Questão 03</h3>
                <p>Resolva a Seguinte derivada.</p>
                <img src="https://media.discordapp.net/attachments/952954997665058828/1050841916373213284/image.png"
                    alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto; width: auto;height: auto;">
            </div>
            <div class="mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                    Resultado da Questão 3
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal3" tabindex="-1" onclick="My_Video()"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Resultado da questão 03</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="https://media.discordapp.net/attachments/981329982422941716/1051602715387625582/image.png"
                                    alt="Banner" height="600px" width="1030" class="d-flex mt-1"
                                    style="margin: 0 auto; width: -webkit-fill-available;">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" onclick="My_Video()"
                                    data-bs-dismiss="modal">fechar</button>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
        <div class="mb-5"></div>

        <?php
include_once('padrao/footer.php');
?>
        <script type="text/javascript">
        var videopause = document.getElementById("video");

        function My_Video() {
            videopause.pause();
        }
        </script>