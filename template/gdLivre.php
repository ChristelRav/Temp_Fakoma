<!DOCTYPE html>
<html lang="en">
<?php include('/inc/head.php'); ?>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <?php include('/inc/menu.php'); ?>
      <?php include('/inc/nav.php'); ?>   
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Compta-GDlivre </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Socicete FAKO'MA</li>
                </ol>
              </nav>
            </div>
             <!--body of content -->
            <div class="row">
               <!-- Formulaire de choix de GDlivre -->
               <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Formulaire de sélection</h4>
                    <p class="card-description"></p>
                    <form class="form-inline">
                      <label class="sr-only" for="inlineFormInputName2">Name</label>
                      <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Date sélectionné">
                      <label class="sr-only" for="inlineFormInputGroupUsername2">Compte</label>
                      <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">Cpt</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                      </div>
                      <button type="submit" class="btn btn-primary mb-2">sélectionné</button>
                    </form>
                  </div>
                </div>
              </div>
          </div>
             <!-- Balance -->
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">GRAND LIVRE</h4>
                    <p class="card-description"> GDlivre <code>.Société</code>
                    </p>
                    <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th> Code Journal </th>
                            <th> Date </th>
                            <th> Référence pièce </th>
                            <th> Libellé écriture</th>
                            <th> Numéro de Compte </th>
                            <th> Débit </th>
                            <th> Crédit </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>150</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>150</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>0</td>
                            <td>150</td>
                          </tr>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>150</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>150</td>
                            <td>0</td>
                          </tr>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>0</td>
                            <td>150</td>
                          </tr>
                          <tr>
                            <td>AN</td>
                            <td>00/00/23</td>
                            <td>FCT001</td>
                            <td>A nouveau 2022</td>
                            <td> 41110 </td>
                            <td>0</td>
                            <td>150</td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <?php include('/inc/footer.php'); ?>
    <!-- End custom js for this page -->
  </body>
</html>