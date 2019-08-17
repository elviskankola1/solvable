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
                                <h5 class="card-title">INSCRIRE UN ELEVE</h5>
                                <form class="needs-validation" novalidate action="<?php echo site_url('welcome/inscription');?>" method="POST">
                                    <div class="form-row">
										<?php if($this->session->ok):?>
											<div class="col-md-12 mb-3">
												<h4 style="color:green;"><b><?php echo $this->session->ok;?></b></h4>
											</div>
										<?php endif?>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom01">NOM</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="Entrez le nom" name="nom"required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">POSTNOM</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Entrez le postnom" name="prenom"  required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">PRENOM</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="entrez le prenom" name="postnom" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">DATE DE NAISSANCE</label>
                                            <input type="date" class="form-control" id="validationCustom02" placeholder="Last name" name="naissance" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
										</div>
										<div class="col-md-12 mb-3">
                                            <label for="validationCustom02">MONTANT</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="entrez le montant inscription" name="montant" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">NUMERO SECOURS</label>
                                            <input type="number" class="form-control" id="validationCustom02" placeholder="Entrez un numero de telephone secours" name="secours" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">GENRE</label>
                                            <select class="form-control" id="validationCustom02" name="genre">
                                                <option>M</option>
                                                <option>F</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="validationCustom02">Classe</label>
                                            <select class="form-control" id="validationCustom02" name="classe">
                                                <option value="1">1 annee primaire</option>
                                                <option value="2">2 annee primaire</option>
                                                <option value="3">3 annee primaire</option>
                                                <option value="4">4 annee primaire</option>
                                                <option value="5">5 annee primaire</option>
                                                <option value="6">6 annee primaire</option>
												<option value="7">7 annee primaire</option>
												<option value="8">8 annee primaire</option>
												<option value="9">1 annee maternelle</option>
												<option value="10">2 annee maternelle</option>
												<option value="11">3 annee maternelle</option>

                                            </select>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    <button class="btn btn-primary" type="submit">INSCRIRE</button>
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
