<?php $this->load->view('parts/header-adm'); ?>
<?php $this->load->view('parts/nav-adm'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container"><br>
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()?>index.php/Products/store" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <label for="titulo">Título</label>
                                <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Título">
                            </div>
                            <div class="col">
                                <label for="categoria">Categoria</label>
                                <select type="text" name="categoria" id="categoria" class="form-control">
                                    <option selected>...</option>
                                    <option value="1">Quadros</option>
                                    <option value="2">Cadernos</option>
                                    <option value="3">Agendas</option>
                                    <option value="4">Planners</option>
                                    <option value="5">Plaquinhas</option>
                                </select>
                            </div>
                        </div><br>
                        <div class="form-group col">
                            <label for="descricao">Descrição</label>
                            <textarea class="form-control" name="descricao" type="text" id="descricao" rows="4"></textarea>
                        </div><br>

                        <div class="row">
                            <div class="col">
                                <label for="status">Situação</label>
                                <select type="text" name="status" id="status" class="form-control">
                                    <option selected>...</option>
                                    <option value="1">Disponível</option>
                                    <option value="2">Disponível para encomendas</option>
                                    <option value="3">Indisponível</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="img">Adicionar Imagem do Produto</label><br>
                                <input type="text" name="img" class="form-control-file" id="img">
                            </div>
                        </div><br>
                        
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php $this->load->view('parts/footer-adm'); ?><form>