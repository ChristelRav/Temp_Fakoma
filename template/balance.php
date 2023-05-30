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
              <h3 class="page-title"> Compta-Balance </h3>
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
                    <p class="card-description"> </p>
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputCity1">Année sélectionnée</label>
                        <input type="text" class="form-control" id="exampleInputCity1" placeholder="Année">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Sélectionné</button>
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
                    <h4 class="card-title">BALANCE</h4>
                    <p class="card-description"> table <code>.Balance</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                        <tr>
                            <th> Numéro de Compte </th>
                            <th> Débit </th>
                            <th> Crédit </th>
                            <th> Solde Débiteur  </th>
                            <th> Solde Créditeur </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
                          </tr>
                          <tr>
                            <td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
                          </tr>
                          <tr>
                          <td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
                          </tr>
                          <tr>
                            <td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
                          </tr>
                          <tr>
                            -x<td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
                          </tr>
                          <tr>
                            <td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
                          </tr>
                          <tr>
                            <td> 41110 </td>
                            <td>150 </td>
                            <td> 0 </td>
                            <td> 150</td>
                            <td> 0 </td>
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