<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    // Usuario no autenticado, redirigir al inicio
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GearMatch AI - Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse p-3">
            <h4 class="text-white mb-4"><i class="bi bi-music-note-beamed me-2"></i>GearMatch</h4>
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-search me-2"></i> Nueva Búsqueda</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-heart me-2"></i> Favoritos</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-clock-history me-2"></i> Historial</a></li>
                <hr class="text-secondary">
                <li class="nav-item"><a class="nav-link text-danger" href="index.html"><i class="bi bi-box-arrow-left me-2"></i> Salir</a></li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom border-secondary">
                <?php
                echo "<h1 class='h2'>Bienvenido,". htmlspecialchars($_SESSION['name']) .'!'."</h1>";
                ?>
                <div class="btn-toolbar mb-2 mb-md-0">
                    <button type="button" class="btn btn-sm btn-outline-secondary me-2">Exportar PDF</button>
                    <button type="button" class="btn btn-sm btn-accent">Nueva Consulta IA</button>
                </div>
            </div>

            <!-- Stats Cards -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-wallet2 stat-icon me-3"></i>
                            <div>
                                <small class="text-secondary">Presupuesto Promedio</small>
                                <h4 class="mb-0">$1,200 USD</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-stars stat-icon me-3"></i>
                            <div>
                                <small class="text-secondary">Matches Realizados</small>
                                <h4 class="mb-0">24</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-tag stat-icon me-3"></i>
                            <div>
                                <small class="text-secondary">Ahorro Estimado</small>
                                <h4 class="mb-0">$350 USD</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- AI Assistant Interface -->
                <div class="col-lg-7 mb-4">
                    <div class="card h-100 p-4">
                        <h5 class="card-title mb-4"><i class="bi bi-robot me-2"></i>Asistente Activo</h5>
                        <div class="ai-chat-box mb-3">
                            <div class="message-ai">¡Hola! He analizado tu interés en el <strong>Blues</strong>. He encontrado 3 guitarras que se ajustan a tus $900 de presupuesto. ¿Quieres verlas?</div>
                            <div class="message-user">Sí, por favor. Prioriza las que tengan pastillas Single Coil.</div>
                            <div class="message-ai">Entendido. Filtrando por Single Coils y maderas de Aliso...</div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control bg-dark border-secondary text-white" placeholder="Pregunta algo sobre gear...">
                            <button class="btn btn-accent"><i class="bi bi-send"></i></button>
                        </div>
                    </div>
                </div>

                <!-- Recent Recommendations -->
                <div class="col-lg-5 mb-4">
                    <div class="card h-100 p-4">
                        <h5 class="card-title mb-4">Últimas Recomendaciones</h5>
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item list-group-item-action bg-transparent text-white border-secondary px-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Fender Player Stratocaster</h6>
                                    <small class="text-accent">$850</small>
                                </div>
                                <p class="mb-1 text-secondary small">Match del 98% según tu presupuesto.</p>
                            </a>
                            <a href="#" class="list-group-item list-group-item-action bg-transparent text-white border-secondary px-0">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-1">Boss Katana MKII</h6>
                                    <small class="text-accent">$320</small>
                                </div>
                                <p class="mb-1 text-secondary small">Complemento ideal para tu setup.</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>