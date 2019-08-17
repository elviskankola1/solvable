<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">       
                            <div class="col-lg-12">
                                <div class="main-card mb-12 card">
                                    <div class="card-body"><h5 class="card-title">En ordre</h5>
                                        <table class="mb-0 table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>nom</th>
                                                <th>detail</th>
                                                <th>Mois</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($eleves as $eleve):?>
                                                <tr>
                                                    <th scope="row"><?php echo $eleve->idEleve;?></th>
                                                    <td><?php echo $eleve->nomEleve." ".$eleve->prenomEleve;?></td>
                                                    <td><a href="<?php echo site_url('welcome/eleveDetail').'/'.$eleve->idEleve;?>">Detail</a></td>
                                                    <td><?php echo $eleve->nomMois;?></td>
                                                </tr>
                                                <?php endforeach?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                      </div>
        </div>
    </div>
<script type="text/javascript" src="./assets/scripts/main.js"></script></body>
</html>
