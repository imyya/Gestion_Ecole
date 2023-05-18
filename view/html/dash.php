<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" />
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />

    <link rel="stylesheet" href="../CSS/dash.css" />
    
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class="fas fa-user-secret me-2"></i>BREUKH'S COOL</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold ">Dashboard</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">General</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">Gestion Eleves</a>
                <a href="classe.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Gestion Classes</a>
                <a href="niveau.html" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Gestion Niveaux</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Matieres</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Evaluation</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Bulletins</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold">Se Deconnecter</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Gestion des eleves</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Baila Wone
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Profil</a></li>
                                <li><a class="dropdown-item" href="#">Reglages</a></li>
                                <li><a class="dropdown-item" href="#">Se Deconnecter</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">1720</h3>
                                <p class="fs-5">Eleves</p>
                            </div>
                            <i class="bi-globe"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">Filtrer</h3>
                                <p class="fs-5">Classes</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Liste des eleves</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prenom</th>
                                    <th scope="col">Data de naissance</th>
                                    <th scope="col">Classe</th>
                                    <th scope="col">  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Bah</td>
                                    <td>Yero</td>
                                    <td>13/09/1999</td>
                                   <td>Seconde S2</td>
                                   <td>
                                    <div class="button-wrapper d-flex justify-content-end">
                                      <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                      <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                      <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                    </div>
                                  </td>

                                    
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Gael</td>
                                    <td>Samira</td>
                                    <td>11/04/2000</td>
                                    <td>Seconde S1</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Zahra</td>
                                    <td>Fatima</td>
                                    <td>06/12/2015</td>
                                    <td>CM1</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Cesar</td>
                                    <td>Juan</td>
                                    <td>03/09/2018</td>
                                    <td>CE1</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Zahra</td>
                                    <td>Fatima</td>
                                    <td>03/11/2010</td>
                                    <td>5em</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                                <tr>
                                    <th scope="row">6</th>
                                    <td>Zahra</td>
                                    <td>Fatima</td>
                                    <td>06/12/2015</td>
                                    <td>CM1</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                                <tr>
                                    <th scope="row">7</th>
                                    <td>Zahra</td>
                                    <td>Fatima</td>
                                    <td>06/12/2015</td>
                                    <td>CM1</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                                <tr>
                                    <th scope="row">8</th>
                                    <td>Zahra</td>
                                    <td>Fatima</td>
                                    <td>06/12/2015</td>
                                    <td>CM1</td>
                                    <td>
                                        <div class="button-wrapper d-flex justify-content-end">
                                          <a href="#" class="btn btn-primary btn-sm me-2">Voir détails</a>
                                          <a href="modify-student.html" class="btn btn-warning btn-sm me-2">Modifier</a>
                                          <a href="#" class="btn btn-danger btn-sm">Supprimer</a>
                                        </div>
                                    </td>
    
                                </tr>
                               
                            </tbody>
                        </table>

                      
                        <div class="mt-4 d-flex justify-content-center ">
                            <a href="student-regist.html" class="btn btn-success">+ Ajouter</a>
                        </div>

                        
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>