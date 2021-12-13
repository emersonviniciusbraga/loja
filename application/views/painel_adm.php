<?php $this->load->view('parts/header-adm'); ?>
<?php $this->load->view('parts/nav-adm'); ?>
            <div id="layoutSidenav_content">
                <main>
                <div class="container"><br>
                <h1 class="h3 mb-2 text-gray-800">Produtos Cadastrados</h1><br>
                
                    <div class="card">
                        <div class="card-body text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Imagem</th>
                                    <th scope="col">Titulo</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Situação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($produto as $produto){?>
                                    <?php if($produto ['idadm'] == $_SESSION['logged_adm']['id']){?>
                                    <tr>
                                    <th scope="row"><?= $produto['idproduto']?></th>
                                    <!-- IMAGEM -->
                                    <?php if($produto['img'] == NULL){?>
                                        <td><img style="width: 5%;" src="<?= base_url('assets-adm/img/icon-img.png') ?>"></td>
                                    <?php }else{?>
                                        <td><?php $produto['img'] ?></td>
                                    <?php }?>
                                    <!-- TITULO -->
                                    <td><?= $produto['titulo']?></td>
                                    <!-- DESCRIÇÃO -->
                                    <td><?= $produto['descricao']?></td>
                                    <!-- CATEGORIA -->
                                    <?php if($produto['categoria'] == 1){?>
                                        <td>Quadros</td>
                                    <?php }elseif ($produto['categoria'] == 2){?>
                                        <td>Cadernos</td>
                                    <?php }elseif ($produto['categoria'] == 3){?>
                                        <td>Agendas</td>
                                    <?php }elseif ($produto['categoria'] == 4){?>
                                        <td>Planners</td>
                                    <?php }elseif ($produto['categoria'] == 5){?>
                                        <td>Plaquinhas</td>
                                    <?php }?>
                                    <!-- STATUS -->
                                    <?php if($produto['status'] == 1){?>
                                        <td style="color: #29C43B;">Disponível</td>
                                    <?php }elseif ($produto['status'] == 2){?>
                                        <td style="color: #29C43B;">Disponível para encomendar</td>
                                    <?php }elseif ($produto['status'] == 3){?>
                                        <td style="color: #C91A1D;">Indisponível</td>
                                    <?php }?>
                                    </tr>
                                <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
<?php $this->load->view('parts/footer-adm'); ?>