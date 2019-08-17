<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">       
                            <div class="col-lg-12">
                                <div class="main-card mb-12 card">
                                    <div class="card-body"><h5 class="card-title">LISTE ELEVE</h5>
                                        <table class="mb-0 table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Numero</th>
                                                <th>nom</th>
                                                <th>prenom</th>
                                                <th>class</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($eleves as $eleve):?>
                                                <tr>
                                                    <th scope="row"><?php echo $eleve->idEleve;?></th>
                                                    <td><?php echo $eleve->nomEleve." ".$eleve->prenomEleve;?></td>
                                                    <td><?php echo $eleve->postnomEleve;?></td>
													<td><?php

														if ($eleve->classeEleve == 9) 
														{
															echo "1 eme "." annee maternelle";
														}
														elseif ($eleve->classeEleve == 10) 
														{
															echo "2 eme "." annee maternelle";
														}
														elseif($eleve->classeEleve == 11) 
														{
															echo "3 eme "." annee maternelle";
														}
														else
														{
															echo $eleve->classeEleve."eme "." annee primaire";
														}
													
													?></td>
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
