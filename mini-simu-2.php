<?php
include_once('padrao/header.php');
include_once('padrao/navbar.php');
?>
<script type='text/javascript' src='descartes-min.js'></script>
<script type='text/javascript' src='descartesNF-min.js'></script>

<body style="margin-bottom: 0px;">
    <div id="Texto" class="d-flex text-center text-wrap flex-column mt-2">
        <hr>
        <h1>Exercício</h1>
        <hr>
        <div class="container">
          <!--  <h3>Questão 01</h3>
            <p>Resolva a seguinte Integral.</p>
            <img src="https://media.discordapp.net/attachments/952954997665058828/1050844629907538041/image.png"
                alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto;">
        </div>
        <div class="mt-3">
           Button trigger modal 
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Resultado da Questão 1
            </button>

           Modal 
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Resultado da questão 01</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://media.discordapp.net/attachments/1026969031556743212/1050862632166490132/image.png" alt="Banner" width="1030" class="d-flex mt-1"
                                style="margin: 0 auto;">
                                <img src="https://media.discordapp.net/attachments/1026969031556743212/1050863023805431828/image.png" alt="Banner" width="1030" class="d-flex mt-1"
                                style="margin: 0 auto;">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <button type="button" class="btn btn-primary">Download</button>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>
        <!-- QUestão 02-->
        <div class="container">
            <h3>Questão 01</h3>
            <p>Resolva a seguinte questão utilizando o conceito de L&CloseCurlyQuote;Hospital.</p>
            <img src="https://media.discordapp.net/attachments/952954997665058828/1050845029352087612/image.png"
                alt="Banner" height="200px" class="d-flex mt-1" style="margin: 0 auto;">
        </div>
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Resultado da Questão 1
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal2" tabindex="-1" onclick="My_Video()"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Resultado da questão 01</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="https://media.discordapp.net/attachments/1026969031556743212/1050865611728764988/image.png" alt="Banner" height="450px" width="1030" class="d-flex mt-1"
                                style="margin: 0 auto;">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" onclick="My_Video()"
                                data-bs-dismiss="modal">fechar</button>
                            <button type="button" class="btn btn-primary" id="pause">Download</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <?php
include_once('padrao/footer.php');
?>
    <script type="text/javascript">
    var videopause = document.getElementById("video");

    function My_Video() {
        videopause.pause();
    }
    </script>