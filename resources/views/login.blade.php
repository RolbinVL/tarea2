<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Laravel</title>
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
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }
        
        .container {
            width: 420px;
            padding: 40px;
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
            margin-bottom: 20px;
        }
        
        .logo-circle {
            width: 70px;
            height: 70px;
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
            font-size: 30px;
            font-weight: bold;
        }
        
        h1 {
            color: #2c3e50;
            font-size: 28px;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .subtitle {
            color: #7f8c8d;
            font-size: 14px;
            margin-bottom: 30px;
        }
        
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .input-group {
            position: relative;
            width: 100%;
            margin-bottom: 20px;
        }
        
        .input-group input {
            width: 100%;
            padding: 14px 15px;
            font-size: 14px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            background-color: #f7f9fc;
            transition: all 0.3s ease;
            color: #444;
        }
        
        .input-group input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 0 2px rgba(52, 152, 219, 0.2);
            background-color: #fff;
        }
        
        .input-group input::placeholder {
            color: #95a5a6;
        }
        
        button {
            width: 100%;
            padding: 14px;
            color: #ffffff;
            background: linear-gradient(45deg, #3498db, #2980b9);
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 16px;
            font-weight: 600;
            margin-top: 10px;
            box-shadow: 0 4px 6px rgba(41, 128, 185, 0.2);
        }
        
        button:hover {
            background: linear-gradient(45deg, #2980b9, #2573b3);
            box-shadow: 0 5px 15px rgba(41, 128, 185, 0.3);
            transform: translateY(-2px);
        }
        
        button:active {
            transform: translateY(0);
            box-shadow: 0 2px 8px rgba(41, 128, 185, 0.3);
        }
        
        .footer {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .divider {
            width: 100%;
            height: 1px;
            background-color: #ecf0f1;
            margin: 20px 0;
        }
        
        .link {
            color: #3498db;
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
            margin-top: 5px;
        }
        
        .link:hover {
            color: #2980b9;
            text-decoration: underline;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            width: 100%;
            margin: 15px 0;
            justify-content: flex-start;
        }
        
        .remember-me input {
            margin-right: 8px;
        }
        
        .remember-me label {
            color: #7f8c8d;
            font-size: 14px;
        }
        
        @media (max-width: 480px) {
            .container {
                width: 90%;
                padding: 30px 20px;
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
            <h1>Bienvenido</h1>
            <p class="subtitle">Ingresa tus credenciales para continuar</p>
        </div>
        
        <form action="/login" method="POST">
            <div class="input-group">
                <input type="email" name="email" placeholder="Correo electrónico" required>
            </div>
            
            <div class="input-group">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Recordar sesión</label>
            </div>
            
            <button type="submit">Iniciar sesión</button>
        </form>
        
        <div class="footer">
            <div class="divider"></div>
            <a class="link" href="/forgot-password">¿Olvidaste tu contraseña?</a>
            <a class="link" href="/register">Crear una cuenta nueva</a>
        </div>
    </div>
</body>
</html>