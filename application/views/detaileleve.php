</div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                        <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-1" data-toggle="tab" href="#tab-content-1">
                                    <span></span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a role="tab" class="nav-link" id="tab-2" data-toggle="tab" href="#tab-content-2">
                                    <span></span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    
                                    <div class="col-md-2"></div>
                                        <?php foreach($eleves as $info):?>
                                        <div class="col-md-4" >
                                            <div class="main-card mb-3 card"><img width="100%" src="<?php  echo base_url('assets/images/avatars/1.jpg');?>" alt="Card image cap" class="card-img-top">
                                                <div class="card-body"><h5 class="card-title"><?php echo $info->nomEleve.' '.$info->postnomEleve;?></h5><h6 class="card-subtitle">
													<?php

														if ($info->classeEleve == 9) 
														{
															echo "1 eme "." annee maternelle";
														}
														elseif ($info->classeEleve == 10) 
														{
															echo "2 eme "." annee maternelle";
														}
														elseif($info->classeEleve == 11) 
														{
															echo "3 eme "." annee maternelle";
														}
														else
														{
															echo $info->classeEleve."eme "." annee primaire";
														}
																											
													
													?>

												</h6>
                                                    
                                                </div>
                                            </div>
                                            <?php endforeach?>        
                                        </div>
                                        
                                        <div class="col-md-5">
                                            <div class="scroll-area-sm">
                                                    <?php if($infos):?>
                                                    <div class="scrollbar-container">
                                                        <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                                            <?php foreach($infos as $info):?>
                                                            <li class="list-group-item">
                                                                <div class="widget-content p-0">
                                                                    <div class="widget-content-wrapper">
                                                                        <div class="widget-content-left mr-3">
                                                                            <img width="42" class="rounded-circle" src="<?php echo base_url('assets/images/avatars/9.jpg');?>" alt="">
                                                                        </div>
                                                                        <div class="widget-content-left">
                                                                            <div class="widget-heading"><?php echo $info->nomMois;?></div>
                                                                            <div class="widget-subheading"><?php echo $info->montantPaiement.'Fc';?></div>
                                                                        </div>
                                                                        <div class="widget-content-right">
																			<?php if(($info->montantPaiement == 15500) and (($info->classeEleve == 1) or ($info->classeEleve == 2) or ($info->classeEleve == 3) or ($info->classeEleve == 4) or ($info->classeEleve == 5) or ($info->classeEleve == 6))):?>
																			<div class="widget-subheading"><h5 style="color:green;">Totalité payée</h5></div>
																			<?php elseif(($info->montantPaiement < 15500) and (($info->classeEleve == 1) or ($info->classeEleve == 2) or ($info->classeEleve == 3) or ($info->classeEleve == 4) or ($info->classeEleve == 5) or ($info->classeEleve == 6))):?>
																			<div class="widget-subheading"><h6 style="color:red;">le reste est <?php echo 15500 - $info->montantPaiement;?></h6></div>
																			<?php elseif(($info->montantPaiement < 17000) and (($info->classeEleve = 9) or ($info->classeEleve = 10) or ($info->classeEleve = 11) )):?>
																			<div class="widget-subheading"><h6 style="color:red;">le reste est <?php echo 17000 - $info->montantPaiement;?></h6></div>
																			<?php elseif(($info->montantPaiement == 17000) and (($info->classeEleve = 9) or ($info->classeEleve = 10) or ($info->classeEleve = 11) )):?>
																			<div class="widget-subheading"><h5 style="color:green;">Totalité payée</h5></div>
																			
																			<?php endif?>
																			
																
                                                                        </div>
                                                                    </div>
                                                                </div>
															</li>
															
                                                            <?php endforeach;?>
                                                        </ul>
                                                    </div>
                                                    <?php else:?>
                                                        <h4 style="text-align:center;">Aucun paiement effectué!</h4>
                                                     <?php endif?> 
                                                </div>
                                            </div>
                                            
                                               
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade" id="tab-content-2" role="tabpanel">
                                <div class="row">
                                    
                                        
                                </div>
                            </div>
                        </div>
                    </div>
</div>
        </div>
    </div>
</body>
</html>
