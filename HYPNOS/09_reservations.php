<?php
$page = 'contact';
include("include/header.php");
?>

<?php include("include/connexion.php"); ?>




    <section>

        <div id="booking" class="section">
            <div class="section-center">
                <div class="container">
                    <div class="row">
                        <div class="booking-form">
                            <div class="form-header">
                                <h1>Formulaire de réservation</h1>
                            </div>
                            <form>


                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group fond-bg">
                                            <input class="form-control" type="date" required>
                                            <span class="form-label">Date d'entrée</span>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input class="form-control" type="date" required>
                                            <span class="form-label">Date de sortie</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select class="form-control" required>
                                                <option value="" selected hidden></option>
                                                <option>Elegance - Paris</option>
                                                <option>Royal - Cannes</option>
                                                <option>Luxury - Saint-Malo</option>
                                                <option>King - Dieppe</option>
                                                <option>Imperial - Sète</option>
                                                <option>Elysia - Cassis</option>
                                                <option>Hilton - Caen</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Veuillez choisir votre établissement</span>
                                        </div>
                                    </div>


                                </div>


                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <select class="form-control" required>
                                                <option value="" selected hidden></option>
                                                <option>Suite ULTIMA</option>
                                                <option>Suite DREAMS</option>
                                                <option>Suite ATLANTIS</option>
                                                <option>Suite ELEGANT</option>
                                                <option>Suite INFINITY</option>
                                                <option>Suite DELUXE</option>
                                                <option>Suite ROYAL</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                            <span class="form-label">Veuillez choisir votre suite</span>
                                        </div>
                                    </div>
                                </div>
                            



                                    <div class="form-btn">
                                        <button class="btn btn-primary"><a href="10_index.php" target="_blank">Réserver maintenant</button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>








    <!-- footer -->

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                <img src="img/logo/Logo-hypnose.svg" alt="footer-logo">
                                </a>
                            </div>
                            <p> <br> LE GROUPE HOTELIER <br>
                                <a href="#">+33148474020</a> <br>
                                <a href="#">contact@hypnos.com</a>
                            </p>


                            <?php include("include/footer.php"); ?>