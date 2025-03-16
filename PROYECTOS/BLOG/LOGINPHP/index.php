<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>DEVSESSIONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        body {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            color: #fff;
            min-height: 100vh;
        }
        .jumbotron {
            background: rgba(0, 0, 0, 0.6);
            color: #fff;
            border-radius: 15px;
            padding: 2rem 2rem;
        }
        .card {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 10px;
            color: #fff;
        }
        .modal-content {
            background: #1c1c1e;
            color: #fff;
            border-radius: 10px;
        }
        .form-control {
            background-color: #2c2c2e;
            color: #fff;
            border: 1px solid #444;
        }
        .form-control:focus {
            background-color: #2c2c2e;
            color: #fff;
            border-color: #00c6ff;
            box-shadow: none;
        }
        .btn-primary, .btn-secondary, .btn-success, .btn-danger {
            border-radius: 20px;
        }
        .toast {
            border-radius: 10px;
        }
        @media (max-width: 450px) {

            .tituloPagina{
                font-size: 25px;
            }
        }
    </style>
</head>
<body>

<?php if (isset($_SESSION['success']) || isset($_SESSION['error'])): ?>
<div aria-live="polite" aria-atomic="true" style="position: fixed; top: 20px; right: 20px; z-index: 9999;">
    <div class="toast <?php echo isset($_SESSION['success']) ? 'bg-success' : 'bg-danger'; ?> text-white" data-delay="5000" role="alert">
        <div class="toast-header <?php echo isset($_SESSION['success']) ? 'bg-success' : 'bg-danger'; ?> text-white">
            <strong class="mr-auto"><?php echo isset($_SESSION['success']) ? '✅ Éxito' : '❌ Error'; ?></strong>
            <button type="button" class="ml-2 mb-1 close text-white" data-dismiss="toast">&times;</button>
        </div>
        <div class="toast-body">
            <?php 
                echo isset($_SESSION['success']) ? $_SESSION['success'] : $_SESSION['error']; 
                unset($_SESSION['success'], $_SESSION['error']);
            ?>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="container mt-5">
    <div class="jumbotron text-center">
        <h2 class="display-4 tituloPagina">DEVSESSIONS</h2>
        <p class="lead">Aprende y comparte conocimientos sobre desarrollo web, PHP, MySQL y mucho más.</p>

        <?php if (isset($_SESSION['user'])): ?>
            <p>Hola, <strong><?php echo htmlspecialchars($_SESSION['user']['username']); ?></strong>!</p>
            <a href="dashboard.php" class="btn btn-success"><i class="bi bi-speedometer2"></i> Ir al Tablero</a>
            <a href="logout.php" class="btn btn-danger ml-2"><i class="bi bi-box-arrow-right"></i> Logout</a>
        <?php else: ?>
            <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal"><i class="bi bi-box-arrow-in-right"></i> Login</button>
            <button class="btn btn-secondary ml-2" data-toggle="modal" data-target="#registerModal"><i class="bi bi-person-plus"></i> Registro</button>
        <?php endif; ?>
    </div>


    <!-- CONTENIDO PRINCIPAL -->
    <div class="container my-5">
        <h2 class="text-center mb-4"><i class="bi bi-layers"></i> ¿Qué encontrarás aquí entre otras cosas?</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 h-100">
                    <h4><i class="bi bi-terminal"></i> Backend Total</h4>
                    <ul>
                        <li>PHP 8+ avanzado</li>
                        <li>MySQL optimizado</li>
                        <li>APIs RESTful desde cero</li>
                        <li>Node JS</li>
                        <li>Autenticación JWT </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 h-100">
                    <h4><i class="bi bi-browser-chrome"></i> Frontend Moderno</h4>
                    <ul>
                        <li><strong>React.js</strong> (Biblioteca para construir interfaces de usuario dinámicas y reactivas)</li>
                        <li><strong>Vue.js</strong> (Framework progresivo para construir interfaces de usuario y aplicaciones de una sola página)</li>
                        <li><strong>Tailwind CSS</strong> (Framework CSS para crear interfaces rápidamente con clases utilitarias y diseño funcional)</li>
                        <li><strong>Bootstrap 5</strong> (Framework CSS para el desarrollo rápido de sitios web responsivos y modernos)</li>
                        <li><strong>Angular</strong> (Framework de aplicaciones web de una sola página de Google, ideal para aplicaciones grandes y complejas)</li>
                    </ul>

                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow p-3 h-100">
                    <h4><i class="bi bi-bar-chart-line"></i> Proyectos Reales</h4>
                    <ul>
                        <li>Blog con panel admin.</li>
                        <li>CRM básico para clientes.</li>
                        <li>Dashboard interactivo para control de gastos.</li>
                        <li>App de tareas (ToDo).</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row align-items-center my-5">
            <div class="col-md-6 mb-4">
                <img src="https://unsplash.com/photos/1K9T5YiZ2WU/download?force=true" alt="Seguridad" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h3><i class="bi bi-shield-lock"></i> Seguridad al Máximo</h3>
                <p>Protege tus apps contra XSS, CSRF y SQL Injection. Aprende validaciones robustas, manejo de contraseñas (hashing), y control de sesiones seguro.</p>
                <a href="seguridad.php" class="btn btn-outline-dark mt-2">Ver más <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
        <h2 class="text-center mb-4"><i class="bi bi-lightbulb"></i> ¿Qué puedes lograr con la programación?</h2>
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="card p-3 h-100 text-center">
                    <i class="bi bi-phone" style="font-size: 2rem;"></i>
                    <h5>Apps Web/Móvil</h5>
                    <p>Desarrolla soluciones útiles que impacten a miles de personas.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card p-3 h-100 text-center">
                    <i class="bi bi-cpu" style="font-size: 2rem;"></i>
                    <h5>Automatización</h5>
                    <p>Ahorra tiempo con scripts que resuelvan tareas repetitivas.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card p-3 h-100 text-center">
                    <i class="bi bi-bar-chart"></i>
                    <h5>Emprendimiento</h5>
                    <p>Crea tu propio sitio, tienda online o SaaS con monetización.</p>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card p-3 h-100 text-center">
                    <i class="bi bi-robot"></i>
                    <h5>Inteligencia Artificial</h5>
                    <p>Explora IA, Chatbots y Machine Learning desde cero.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CONTROL DE LOGIN -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="login.php" method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-box-arrow-in-right"></i> Login</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary"><i class="bi bi-box-arrow-in-right"></i> Iniciar Sesión</button>
            </div>
        </form>
    </div>
</div>

<!-- CONTROL DE REGISTRO -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="register.php" method="POST" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-person-plus"></i> Registro</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Usuario</label>
                    <input type="text" name="username" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Correo Electrónico</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-secondary"><i class="bi bi-person-plus"></i> Registrarse</button>
            </div>
        </form>
    </div>
</div>

<!-- Scripts Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function(){
    $('.toast').toast('show');
});
</script>

<?php include './includes/footer.php'; ?>

</body>
</html>
