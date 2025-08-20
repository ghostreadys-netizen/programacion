<?php

session_start();
include 'db.php';

if (!isset($_SESSION['carrito'])) {
    $_SESSION['carrito'] = array();
}

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'add':
            if (isset($_POST['producto_id']) && isset($_POST['cantidad'])) {
                $producto_id = intval($_POST['producto_id']);
                $cantidad = intval($_POST['cantidad']);

                $stmt = $pdo->prepare("SELECT * FROM Productos WHERE id = ?");
                $stmt->execute([$producto_id]);
                $producto = $stmt->fetch();

                if ($producto) {
                    if (!isset($_SESSION['carrito'][$producto_id])) {
                        $_SESSION['carrito'][$producto_id] = [
                            'id' => $producto_id,
                            'nombre' => $producto['nombre'],
                            'precio' => $producto['precio'],
                            'cantidad' => $cantidad,
                            'imagen' => $producto['imagen']
                        ];
                    } else {
                        $_SESSION['carrito'][$producto_id]['cantidad'] += $cantidad;
                    }
                }
            }
            break;

        case 'update':
            if (isset($_POST['producto_id']) && isset($_POST['cantidad'])) {
                $producto_id = intval($_POST['producto_id']);
                $cantidad = intval($_POST['cantidad']);

                if ($cantidad > 0) {
                    $_SESSION['carrito'][$producto_id]['cantidad'] = $cantidad;
                } else {
                    unset($_SESSION['carrito'][$producto_id]);
                }
            }
            break;

        case 'remove':
            if (isset($_POST['producto_id'])) {
                $producto_id = intval($_POST['producto_id']);
                unset($_SESSION['carrito'][$producto_id]);
            }
            break;
    }


    header('Location: carrito.php');
    exit;
}

$total = 0;
foreach ($_SESSION['carrito'] as $item) {
    $total += $item['precio'] * $item['cantidad'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Carrito de Compras</title>
    <style>
    :root {
        --primary-color: #3498db;
        --secondary-color: #2ecc71;
        --accent-color: #e74c3c;
        --background-color: #f8f9fa;
        --text-color: #2c3e50;
        --border-radius: 12px;
        --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        --transition: all 0.3s ease;
    }

    body {
        font-family: 'Poppins', sans-serif;
        background: var(--background-color);
        color: var(--text-color);
        line-height: 1.6;
        margin: 0;
        padding: 0;
    }

    .cart-container {
        max-width: 1200px;
        margin: 2rem auto;
        padding: 2rem;
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
    }

    h1 {
        color: var(--text-color);
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 1rem;
    }

    h1::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
        border-radius: 2px;
    }

    .cart-item {
        display: grid;
        grid-template-columns: auto 1fr auto;
        gap: 2rem;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        background: white;
        border-radius: var(--border-radius);
        box-shadow: var(--box-shadow);
        transition: var(--transition);
    }

    .cart-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }

    .cart-item img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: var(--border-radius);
    }

    .cart-item-details {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .cart-item-details h3 {
        margin: 0;
        color: var(--text-color);
        font-size: 1.2rem;
    }

    .cart-item-total {
        display: flex;
        align-items: center;
        font-size: 1.2rem;
        color: var(--primary-color);
    }

    .cart-actions {
        display: flex;
        gap: 1rem;
        align-items: center;
        margin-top: 1rem;
    }

    .quantity-input {
        width: 70px;
        padding: 0.5rem;
        border: 2px solid #e1e1e1;
        border-radius: var(--border-radius);
        text-align: center;
        font-size: 1rem;
    }

    .btn {
        padding: 0.8rem 1.5rem;
        border: none;
        border-radius: 25px;
        cursor: pointer;
        font-weight: 600;
        transition: var(--transition);
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }

    .btn-update {
        background: var(--secondary-color);
        color: white;
    }

    .btn-update:hover {
        background: #27ae60;
        transform: translateY(-2px);
    }

    .btn-remove {
        background: var(--accent-color);
        color: white;
    }

    .btn-remove:hover {
        background: #c0392b;
        transform: translateY(-2px);
    }

    .cart-summary {
        margin-top: 2rem;
        padding: 2rem;
        background: linear-gradient(135deg, #f6f8fa, #f1f5f9);
        border-radius: var(--border-radius);
        text-align: right;
    }

    .cart-summary h2 {
        color: var(--text-color);
        margin-bottom: 1rem;
    }

    .cart-summary p {
        font-size: 1.5rem;
        color: var(--primary-color);
    }

    a {
        color: var(--primary-color);
        text-decoration: none;
        font-weight: 600;
        transition: var(--transition);
        display: inline-block;
        margin-top: 1rem;
    }

    a:hover {
        color: var(--secondary-color);
        transform: translateX(5px);
    }

    p:empty+p {
        text-align: center;
        font-size: 1.2rem;
        color: #666;
        padding: 3rem;
        background: #f8f9fa;
        border-radius: var(--border-radius);
        margin: 2rem 0;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .cart-item {
        animation: fadeIn 0.5s ease-out forwards;
    }

    @media (max-width: 768px) {
        .cart-container {
            padding: 1rem;
            margin: 1rem;
        }

        .cart-item {
            grid-template-columns: 1fr;
            text-align: center;
            gap: 1rem;
        }

        .cart-item img {
            width: 100%;
            max-width: 200px;
            margin: 0 auto;
        }

        .cart-actions {
            justify-content: center;
        }

        .cart-item-total {
            justify-content: center;
        }
    }

    .cart-item img {
        transition: var(--transition);
    }

    .cart-item img:hover {
        transform: scale(1.05);
    }

    .quantity-input:focus {
        outline: none;
        border-color: var(--primary-color);
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
    }


    .cart-summary .btn-update {
        font-size: 1.1rem;
        padding: 1rem 2rem;
        background: linear-gradient(135deg, var(--secondary-color), #27ae60);
        border-radius: 30px;
        box-shadow: 0 4px 15px rgba(46, 204, 113, 0.3);
    }

    .cart-summary .btn-update:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
    }
    </style>
</head>

<body>
    <div class="cart-container">
        <h1>Carrito de Compras</h1>

        <?php if (empty($_SESSION['carrito'])): ?>
        <p>Tu carrito está vacío</p>
        <?php else: ?>
        <?php foreach ($_SESSION['carrito'] as $item): ?>
        <div class="cart-item">
            <img src="<?php echo htmlspecialchars($item['imagen']); ?>"
                alt="<?php echo htmlspecialchars($item['nombre']); ?>">

            <div class="cart-item-details">
                <h3><?php echo htmlspecialchars($item['nombre']); ?></h3>
                <p>Precio: $<?php echo number_format($item['precio'], 2); ?></p>

                <div class="cart-actions">
                    <form method="post" style="display: inline;">
                        <input type="hidden" name="action" value="update">
                        <input type="hidden" name="producto_id" value="<?php echo $item['id']; ?>">
                        <input type="number" name="cantidad" value="<?php echo $item['cantidad']; ?>" min="1"
                            class="quantity-input">
                        <button type="submit" class="btn btn-update">Actualizar</button>
                    </form>

                    <form method="post" style="display: inline;">
                        <input type="hidden" name="action" value="remove">
                        <input type="hidden" name="producto_id" value="<?php echo $item['id']; ?>">
                        <button type="submit" class="btn btn-remove">Eliminar</button>
                    </form>
                </div>
            </div>

            <div class="cart-item-total">
                <strong>Subtotal: $<?php echo number_format($item['precio'] * $item['cantidad'], 2); ?></strong>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="cart-summary">
            <h2>Resumen del Carrito</h2>
            <p><strong>Total: $<?php echo number_format($total, 2); ?></strong></p>
            <button onclick="window.location='checkout.php'" class="btn btn-update">
                Proceder al Pago
            </button>
        </div>
        <?php endif; ?>

        <p><a href="principal.php">Continuar Comprando</a></p>
    </div>
</body>

</html>