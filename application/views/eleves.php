<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">       
                            <div class="col-lg-12">
                                <div class="main-card mb-12 card">
                                    <div class="card-body"><h5 class="card-title"><?php echo $classe;?> eme annee Primaire</h5>
                                        <table class="mb-0 table table-striped">
                                            <?php if($eleves):?>
                                            <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>nom</th>
                                                <th>Voir</th>
												<th>Mois</th>
												<th>Montant</th>
                                            </tr>
                                            </thead>
                                            
                                            <tbody>
                                                <?php foreach($eleves as $eleve):?>
                                                <tr>
                                                    <th scope="row"><?php echo $eleve->idEleve;?></th>
                                                    <td><?php echo $eleve->nomEleve." ".$eleve->prenomEleve;?></td>
                                                    <td><a href="<?php echo site_url('welcome/eleveDetail').'/'.$eleve->idEleve;?>">Detail</a></td>
													<td><?php echo $eleve->nomMois;?></td>
													<td><?php echo $eleve->montantPaiement;?></td>
                                                </tr>
                                                <?php endforeach?>
                                            </tbody>
                                            <?php else:?>
                                                <h4 style="text-align:center;">Aucun eleve inscrit dans cette classe</h4>
                                            <?php endif?>
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
