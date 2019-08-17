<div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                   
                                </div>
                                <div class="page-title-actions">
                                    
                                </div>    </div>
                        </div>            
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">PAIEMENT</h5>
                                <form class="needs-validation" novalidate action="<?php echo site_url('welcome/paiement');?>" method="POST">
                                    <div class="form-row">
										<?php if($this->session->ok):?>
											<div class="col-md-12 mb-3">
												<h4 style="color:green;"><b><?php echo $this->session->ok;?></b></h4>
											</div>
										<?php endif?>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">MONTANT</label>
                                            <input type="number" class="form-control" id="validationCustom02" placeholder="Entrez le montant de paiement" name="montant" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">eleve</label>
                                            <select class="form-control" id="validationCustom02" name="idEleve">
                                                <?php foreach($eleves as $eleve):?>
                                                    <option value="<?php echo $eleve->idEleve;?>"><?php echo $eleve->nomEleve." ".$eleve->postnomEleve." ".$eleve->prenomEleve?></option>
                                                <?php endforeach?>
                                                
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">Classe</label>
                                            <select class="form-control" id="validationCustom02" name="mois">
                                                <?php foreach($months as $mois):?>
                                                <option value="<?php echo $mois->idMois;?>"><?php echo $mois->nomMois;?></option>
                                                <?php endforeach?>
                                                
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    <button class="btn btn-primary" type="submit">ENREGISTRER</button>
                                </form>
            
                                <script>
                                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                                    (function() {
                                        'use strict';
                                        window.addEventListener('load', function() {
                                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                            var forms = document.getElementsByClassName('needs-validation');
                                            // Loop over them and prevent submission
                                            var validation = Array.prototype.filter.call(forms, function(form) {
                                                form.addEventListener('submit', function(event) {
                                                    if (form.checkValidity() === false) {
                                                        event.preventDefault();
                                                        event.stopPropagation();
                                                    }
                                                    form.classList.add('was-validated');
                                                }, false);
                                            });
                                        }, false);
                                    })();
                                </script>
                            </div>
                        </div>
                        
                    </div>
                       </div>
        </div>
    </div>
</body>
</html>
