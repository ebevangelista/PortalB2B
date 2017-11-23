<?php include 'headerLogado.php' ?>

    <div id="divBreadcrumbs" class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4"><a href="telaInicialLogado.php">Início</a> > <strong>Meus pedidos</strong></div>
        <div class="col-md-7 text-center"></div>
    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4"><h1>Meus pedidos</h1></div>
        <div class="col-md-7 text-center"></div>
    </div>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">

            <div class="row divPedidoIndividual">
                <div class="row text-center">
                    <div class="col-md-3 text-center">
                        <h4><strong>PEDIDO #900</strong></h4>
                        <label>24/08/2017</label><br>
                        <label>2 ITENS (R$ 31,01)</label><br>
                        <label>STATUS:</label> <strong>ABERTO</strong><br>
                        <label>POSIÇÃO:</label> <strong>PENDENTE</strong>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <div id="pedidoBreadcrumbs">
                            <ul class="list-inline text-center text-nowrap">
                                <li>
                                    <img clas="img-responsive" src="img/status1PedidoEnviadoAtivo.png" height="100" width="140">
                                </li>
                                <li>
                                    <img clas="img-responsive" src="img/status2PedidoConfirmado.png" height="100" width="140">
                                </li>
                                <li>
                                    <img clas="img-responsive" src="img/status3SaiuParaEntrega.png" height="100" width="69">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnProdutoFull"><img class="text-center" src="img/icon/mais.png" height="20" width="20">&nbsp;&nbsp;MAIS INFORMAÇÕES</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/editar.png" height="20" width="20">&nbsp;&nbsp;EDITAR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/duplicar.png" height="20" width="20">&nbsp;&nbsp;REPETIR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnExcluiFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
                            <img class="text-center" src="img/icon/btnExcluiItem.png" height="20" width="20">&nbsp;&nbsp;EXCLUIR PEDIDO</button>
                    </div>
                </div>
            </div>

            <div class="row divPedidoIndividual">
                <div class="row text-center">
                    <div class="col-md-3 text-center">
                        <h4><strong>PEDIDO #900</strong></h4>
                        <label>24/08/2017</label><br>
                        <label>2 ITENS (R$ 31,01)</label><br>
                        <label>STATUS:</label> <strong>FINALIZADO</strong><br>
                        <label>POSIÇÃO:</label> <strong>CANCELADO</strong><br>
                        <label>MOTIVO:</label><br><strong>CLIENTE SEM CRÉDITO SUFICIENTE</strong>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <div id="pedidoBreadcrumbs">
                            <ul class="list-inline text-center text-nowrap">
                                <li>
                                    <img clas="img-responsive" src="img/status1PedidoEnviadoAtivo.png" height="100" width="140">
                                </li>
                                <li>
                                    <img clas="img-responsive" src="img/status4Cancelado.png" height="100" width="69">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnProdutoFull"><img class="text-center" src="img/icon/mais.png" height="20" width="20">&nbsp;&nbsp;MAIS INFORMAÇÕES</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/editar.png" height="20" width="20">&nbsp;&nbsp;EDITAR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/duplicar.png" height="20" width="20">&nbsp;&nbsp;REPETIR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnExcluiFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
                            <img class="text-center" src="img/icon/btnExcluiItem.png" height="20" width="20">&nbsp;&nbsp;EXCLUIR PEDIDO</button>
                    </div>
                </div>
            </div>
            <div class="row divPedidoIndividual">
                <div class="row text-center">
                    <div class="col-md-3 text-center">
                        <h4><strong>PEDIDO #900</strong></h4>
                        <label>24/08/2017</label><br>
                        <label>2 ITENS (R$ 31,01)</label><br>
                        <label>STATUS:</label> <strong>ABERTO</strong><br>
                        <label>POSIÇÃO:</label> <strong>MONTADO</strong>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <div id="pedidoBreadcrumbs">
                            <ul class="list-inline text-center text-nowrap">
                                <li>
                                    <img src="img/status1PedidoEnviadoAtivo.png" height="100" width="140">
                                </li>
                                <li>
                                    <img src="img/status2PedidoMontadoAtivo.png" height="100" width="140">
                                </li>
                                <li>
                                    <img src="img/status3SaiuParaEntrega.png" height="100" width="69">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnProdutoFull"><img class="text-center" src="img/icon/mais.png" height="20" width="20">&nbsp;&nbsp;MAIS INFORMAÇÕES</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/editar.png" height="20" width="20">&nbsp;&nbsp;EDITAR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/duplicar.png" height="20" width="20">&nbsp;&nbsp;REPETIR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnExcluiFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
                            <img class="text-center" src="img/icon/btnExcluiItem.png" height="20" width="20">&nbsp;&nbsp;EXCLUIR PEDIDO</button>
                    </div>
                </div>
            </div>

            <div class="row divPedidoIndividual">
                <div class="row text-center">
                    <div class="col-md-3 text-center">
                        <h4><strong>PEDIDO #900</strong></h4>
                        <label>24/08/2017</label><br>
                        <label>2 ITENS (R$ 31,01)</label><br>
                        <label>STATUS:</label> <strong>FINALIZADO</strong><br>
                        <label>POSIÇÃO:</label> <strong>ENTREGUE</strong>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <div id="pedidoBreadcrumbs">
                            <ul class="list-inline text-center text-nowrap">
                                <li>
                                    <img src="img/status1PedidoEnviadoAtivo.png" height="100" width="140">
                                </li>
                                <li>
                                    <img src="img/status2PedidoMontadoAtivo.png" height="100" width="140">
                                </li>
                                <li>
                                    <img src="img/status3EntregueAtivo.png" height="100" width="69">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 text-center">
                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnProdutoFull"><img class="text-center" src="img/icon/mais.png" height="20" width="20">&nbsp;&nbsp;MAIS INFORMAÇÕES</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/editar.png" height="20" width="20">&nbsp;&nbsp;EDITAR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnAdicionarALista btnSecundario">
                            <img class="text-center" src="img/icon/duplicar.png" height="20" width="20">&nbsp;&nbsp;REPETIR</button><br>

                        <button type="button" class="btn btn-primary btn-sm btn-block btnComprar btnExcluiFull" data-toggle="modal" data-target="#modalAtencaoMultiplo">
                            <img class="text-center" src="img/icon/btnExcluiItem.png" height="20" width="20">&nbsp;&nbsp;EXCLUIR PEDIDO</button>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10 text-center">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>
                    <li><a href="#">9</a></li>
                    <li><a href="#">10</a></li>
                    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-1"></div>
    </div>
    <br>
<?php include 'footerLogado.php'?>