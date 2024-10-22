<div class="contact-form">
    <div class="form-title mb-4">
        <h4 class="mb-1">Cette section est réservée aux <span class="text-blue">Entreprises</span> </h4>
        <p class="text-danger">
            Vérifiez s'il vous plaît que vous êtes dans la bonne section avant de remplir le formulaire, merci bien !
        </p>
    </div>
    <div class="form">
        <form>
            <h5>Informations sur entreprise / Structure / Organisation</h5>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" id="org-name" placeholder="Nom de l'organisation / Structure" class="mb-3" required>
                </div>
                <div class="col-lg-6">
                    <input type="text" id="address" placeholder="Adresse" class="mb-3" required>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <input type="tel" id="phone" placeholder="N° de Téléphone" class="mb-3">
                </div>
                <div class="col-lg-6">
                    <input type="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" id="website" placeholder="Site Web" class="mb-3">
                </div>
            </div>

            <hr class="w-50 m-auto mb-5">

            <h5>Personne de contact</h5>
            <div class="row">
                <div class="col-lg-6">
                    <input type="text" id="rep-name" placeholder="Nom & prénoms du représentant" class="mb-3">
                </div>
                <div class="col-lg-6">
                    <input type="text" id="rep-function" placeholder="Fonction du représentant" class="mb-3">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <input type="tel" id="rep-phone" placeholder="Téléphone du représentant" class="mb-3">
                </div>
                <div class="col-lg-6"> 
                    <input type="email" id="rep-email" placeholder="Email du représentant" class="mb-3">
                </div>
            </div>

            <div class="message mt-3">
                <p class="mb-4">
                    Listes des sujets pour les tables rondes <span class="text-danger">(Plusieurs choix possibles)*</span>
                </p>
                
                <div class="row mb-4">
                    <h5 class="mb-2">DESCRIPTION DU STAND</h5>

                        <p class="decal-2">
                            Type de stand: <span class="text-danger">(Cochez la case appropriée)</span> 
                            <ul style="margin-left:5%" class="mb-2">
                                <li class="mb-2 black"><input type="radio" class="radio" id="standard" name="stand_type" value="standard"> <label for="standard">Standard (6m<sup>2</sup> )</label></li>
                                <li class="mb-2 black"> <input type="radio" class="radio" id="premuim" name="stand_type" value="premium"> <label for="premuim">Premium (9m <sup>2</sup>)</label> </li>
                                <li class="mb-2 black"> <input type="radio" class="radio" id="perso" name="stand_type" value="personnalisé"> <label for="perso">Stand Personnalisé</label> (Précisez les dimensions) <input type="text" name="" id="" class="w-75 mt-2" placeholder="10m x 10m"></li>
                            </ul>
                        </p>

                        <hr class="w-50 m-auto mb-5">
                        
                        <p class="decal-2">
                        Définissez les produits et services que vous exposerez sur votre stand
                            <textarea name="" id="" placeholder="Produits/Service Exposés" class="mt-2 w-75"></textarea>
                        </p>

                        <hr class="w-50 m-auto mb-5">

                        <p class="decal-2">
                        Décrivez vos besoins techniques pour votre stand pour une meilleure organisation
                            <textarea name="" id="" placeholder="Besoins techniques (Électricités, Internet, fauteil, vidéo projecteurs, ...)" class="mt-2 w-75"></textarea>
                        </p>

                        <hr class="w-50 m-auto mb-5">

                        <p class="decal-2">
                            Tarifs des stands
                            <ul style="margin-left:5%" class="mb-2">
                                <li class="mb-2 black"><input type="radio" class="radio" id="virement" name="payment_method" value="virement"> <label for="virement">Virement bancaire</label></li>
                                <li class="mb-2 black"> <input type="radio" class="radio" id="cheque" name="payment_method" value="cheque"> <label for="cheque">Chèque</label> </li>
                                <li class="mb-2 black"> <input type="radio" class="radio" id="especes" name="payment_method" value="especes"> <label for="especes">Espèces</label></li>
                            </ul>
                        </p>

                        <hr class="w-50 m-auto mb-5">

                        <p class="decal-2">
                            Modalités de paiements
                            <ul style="margin-left:5%" class="mb-2">
                                <li class="mb-2 black">Standard (6m<sup>2</sup> ) : <span class="pink fw-semibold">000.000 Fr CFA</span></li>
                                <li class="mb-2 black"> Premium (9m <sup>2</sup>)  : <span class="pink fw-semibold">: 000.000 Fr CFA</span> </li>
                                <li class="mb-2 black"> Stand Personnalisé : <span class="pink fw-semibold">Sur devis</span> </li>
                            </ul>
                        </p>

                        <hr class="w-50 m-auto mb-5">

                        <p class="decal-2">
                            <span class="fw-semibold text-danger">Conditions générales</span>
                            <ul class="mb-2" style="margin-left:5%">
                                <li class="mb-2 black">
                                    Les stands doivent être montés avant le 11 novembre 2024 à 18h.
                                </li>
                                <li class="mb-2 black">
                                    Les exposants sont responsables de la sécurité de leurs biens.
                                </li>
                                <li>
                                    Toute annulation doit être signalée avant le 1er novembre 2024.
                                </li>
                            </ul>
                        </p>
                </div>

            </div>

            <button class="btn mt-4" style="background-color: #009E60!important">INSCIPTION</button>
        </form>
    </div>
</div>