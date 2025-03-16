<?php
session_start();
require 'config/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit();
}

$user = $_SESSION['user'];

// Crear post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['create'])) {
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if ($title && $content) {
        $stmt = $pdo->prepare("INSERT INTO posts (title, content, user_id) VALUES (?, ?, ?)");
        $stmt->execute([$title, $content, $user['id']]);
    }
}

// Eliminar post
if (isset($_GET['delete'])) {
    $postId = intval($_GET['delete']);
    $stmt = $pdo->prepare("DELETE FROM posts WHERE id = ? AND user_id = ?");
    $stmt->execute([$postId, $user['id']]);
}

// Editar post
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['edit'])) {
    $postId = intval($_POST['post_id']);
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);
    if ($title && $content) {
        $stmt = $pdo->prepare("UPDATE posts SET title = ?, content = ? WHERE id = ? AND user_id = ?");
        $stmt->execute([$title, $content, $postId, $user['id']]);
    }
}

// Obtener posts del usuario
$stmt = $pdo->prepare("SELECT * FROM posts WHERE user_id = ? ORDER BY created_at DESC");
$stmt->execute([$user['id']]);
$posts = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - <?php echo htmlspecialchars($user['username']); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #ff7e5f, #feb47b);
            color: #fff;
            min-height: 100vh;
        }
        .card {
            background: rgba(0,0,0,0.7);
            color: #fff;
            border-radius: 10px;
        }
        .form-control {
            background-color: #333;
            color: #fff;
            border: 1px solid #555;
        }
        .btn {
            border-radius: 20px;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Hola, <?php echo htmlspecialchars($user['username']); ?> 👋</h1>
    <a href="logout.php" class="btn btn-danger mb-4">Logout</a>

    <div class="card p-3 mb-4">
        <h3>Crear nuevo post</h3>
        <form method="POST">
            <input type="hidden" name="create" value="1">
            <div class="form-group">
                <label>Título</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Contenido</label>
                <textarea name="content" class="form-control" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-success">Publicar</button>
        </form>
    </div>

    <h3>Tus Posts</h3>
    <?php foreach ($posts as $post): ?>
        <div class="card p-3 mb-3">
            <h4><?php echo htmlspecialchars($post['title']); ?></h4>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
            <small>Publicado el <?php echo $post['created_at']; ?></small>
            <div class="mt-2">
                <button class="btn btn-warning btn-sm" data-toggle="collapse" data-target="#edit-<?php echo $post['id']; ?>">Editar</button>
                <a href="?delete=<?php echo $post['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar este post?');">Eliminar</a>
            </div>

            <!-- Formulario Editar -->
            <div id="edit-<?php echo $post['id']; ?>" class="collapse mt-3">
                <form method="POST">
                    <input type="hidden" name="edit" value="1">
                    <input type="hidden" name="post_id" value="<?php echo $post['id']; ?>">
                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" name="title" class="form-control" value="<?php echo htmlspecialchars($post['title']); ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Contenido</label>
                        <textarea name="content" class="form-control" rows="3" required><?php echo htmlspecialchars($post['content']); ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Guardar Cambios</button>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
