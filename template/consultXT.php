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
              <h3 class="page-title"> Production </h3>
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
               <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Formulaire d'ajout</h4>
                    <p class="card-description"> </p>
                    <form class="forms-sample">
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Produit</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="xt">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Numero xt</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="num">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Prix de vente</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="prix">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Fabrication</label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="exampleInputConfirmPassword2" placeholder="fab">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Insérer</button>
                      <button class="btn btn-dark">Annulé</button>
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
                    <h4 class="card-title">PRODUIT</h4>
                    <p class="card-description"> table <code>.Liste de xt</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> User </th>
                            <th>Produits</th>
                            <th>progression vente</th>
                            <th>prix Unitaire</th>
                            <th>Fabrication</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>XT001</td>
                            <td> composte Bio </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                          </tr>
                            <td>XT002</td>
                            <td>  charbon Bio </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $138.00 </td>
                            <td> Apr 12, 2015 </td>
                          </tr>
                            <td>XT003</td>
                            <td>  ciment </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 160.25 </td>
                            <td> May 03, 2015 </td>
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