<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a Laravel</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #333;
        }
        
        .container {
            width: 100%;
            max-width: 700px;
            padding: 50px 40px;
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .container:hover {
            transform: translateY(-5px);
        }
        
        .logo {
            margin-bottom: 30px;
        }
        
        .logo-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            box-shadow: 0 4px 15px rgba(106, 17, 203, 0.2);
        }
        
        .logo-circle span {
            color: white;
            font-size: 36px;
            font-weight: bold;
        }
        
        h1 {
            color: #2c3e50;
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: 600;
        }
        
        p {
            color: #7f8c8d;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
            max-width: 500px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .highlight {
            color: #3498db;
            font-weight: 500;
        }
        
        .buttons-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 30px;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            color: #ffffff;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 15px;
            font-weight: 500;
            min-width: 200px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(45deg, #3498db, #2980b9);
            box-shadow: 0 4px 6px rgba(41, 128, 185, 0.2);
        }
        
        .btn-primary:hover {
            background: linear-gradient(45deg, #2980b9, #2573b3);
            box-shadow: 0 5px 15px rgba(41, 128, 185, 0.3);
            transform: translateY(-2px);
        }
        
        .btn-success {
            background: linear-gradient(45deg, #2ecc71, #27ae60);
            box-shadow: 0 4px 6px rgba(46, 204, 113, 0.2);
        }
        
        .btn-success:hover {
            background: linear-gradient(45deg, #27ae60, #219653);
            box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
            transform: translateY(-2px);
        }
        
        .btn-info {
            background: linear-gradient(45deg, #9b59b6, #8e44ad);
            box-shadow: 0 4px 6px rgba(155, 89, 182, 0.2);
        }
        
        .btn-info:hover {
            background: linear-gradient(45deg, #8e44ad, #7d3c98);
            box-shadow: 0 5px 15px rgba(155, 89, 182, 0.3);
            transform: translateY(-2px);
        }
        
        .btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }
        
        .icon {
            margin-right: 8px;
            font-weight: bold;
        }
        
        .divider {
            width: 60%;
            height: 1px;
            background-color: #ecf0f1;
            margin: 30px auto;
        }
        
        .footer {
            color: #95a5a6;
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 40px 20px;
            }
            
            .btn {
                min-width: 180px;
            }
        }
        
        @media (max-width: 480px) {
            .buttons-container {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <div class="logo-circle">
                <span>L</span>
            </div>
            <h1>Bienvenido a Laravel</h1>
            <p>¡Tu aplicación se ha desplegado <span class="highlight">exitosamente</span> en Railway! Ahora estás listo para comenzar a construir tu proyecto.</p>
            <p>Explora la documentación y los tutoriales para comenzar tu viaje con Laravel.</p>
        </div>
        
        <div class="buttons-container">
            <a href="https://laravel.com/docs" class="btn btn-primary">
                <span class="icon">📚</span> Documentación
            </a>
            <a href="https://laracasts.com" class="btn btn-success">
                <span class="icon">🎬</span> Tutoriales en Video
            </a>
            <a href="login" class="btn btn-info">
                <span class="icon">🔐</span> Iniciar Sesión
            </a>
        </div>
        
        <div class="divider"></div>
        
        <div class="footer">
            <p>Potenciado por Laravel v10.x • ¡Feliz desarrollo!</p>
        </div>
    </div>
</body>
</html>