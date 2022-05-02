<?php
session_start();
include('../include/connexion.php');
ob_start(); ?>


<?php include("pages_commun/dropdown.php"); ?>

<?php include("pages_commun/sidebar.php"); ?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">


  <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Titre</th>
                    <th>Adresse</th>
                    <th>Suite</th>
                    <th>Disponibilités</th>
                    <th>Ajouter</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Elegance</td>
                    <td>Paris</td>
                    <td>Ultima</td>
                    <td>4 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                    <td>Royal</td>
                    <td>Cannes</td>
                    <td>Dreams</td>
                    <td>3 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                    <td>Luxury</td>
                    <td>Saint Malo</td>
                    <td>Atlantis</td>
                    <td>5 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                    <td>King</td>
                    <td>Dieppe</td>
                    <td>Elegant</td>
                    <td>2 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                    <td>Impérial</td>
                    <td>Sète</td>
                    <td>Ultima</td>
                    <td>4 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                    <td>Elysia</td>
                    <td>Cassis</td>
                    <td>Deluxe</td>
                    <td>2 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                    <td>Hilton</td>
                    <td>Caen</td>
                    <td>Royal</td>
                    <td>4 suites</td>
                    <td h4 class="text-center bg-indigo">Ajouter</h4></td>
                    <td h4 class="text-center bg-orange">Modifier</h4></td>
                    <td h4 class="text-center bg-lime">Supprimer</h4></td>
                  </tr>
                  <tr>
                  </tr>
                  </tbody>
                </table>
              </div>
              







<!-- /.card-body -->
<div class="card-footer">
  Footer
</div>
<!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php include("pages_commun/footer.php"); ?>


<?php ob_end_flush(); ?>