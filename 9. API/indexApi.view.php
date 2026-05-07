<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes de Rick and Morty</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #121212;
            color: #f0f0f0;
            padding: 20px;
        }

        header {
            text-align: center;
            margin-bottom: 40px;
            padding: 20px;
        }

        h1 {
            color: #42b983;
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 0 0 10px rgba(66, 185, 131, 0.5);
        }

        .subtitle {
            color: #8a8a8a;
            font-size: 1.2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .characters-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .card {
            background: linear-gradient(145deg, #1e1e1e, #2a2a2a);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.5);
        }

        .card-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-bottom: 3px solid #42b983;
        }

        .card-content {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: #42b983;
        }

        .card-info {
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .card-info i {
            margin-right: 10px;
            color: #42b983;
            width: 20px;
            text-align: center;
        }

        .loading {
            text-align: center;
            font-size: 1.5rem;
            margin: 50px 0;
            color: #42b983;
        }

        .error {
            text-align: center;
            color: #ff6b6b;
            font-size: 1.2rem;
            margin: 50px 0;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .characters-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .characters-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Personajes de Rick and Morty</h1>
            <p class="subtitle">Explora el multiverso y conoce a sus habitantes</p>
        </header>

        <div id="characters-container" class="characters-grid">
            <!-- Los personajes se cargarán aquí dinámicamente -->
            <div class="loading">Cargando personajes...</div>
        </div>
    </div>

    <script>
        // Función para obtener los personajes de la API
        async function fetchCharacters() {
            const container = document.getElementById('characters-container');
            
            try {
                // Realizamos la petición a la API
                const response = await fetch('https://rickandmortyapi.com/api/character');
                
                if (!response.ok) {
                    throw new Error('Error al obtener los datos');
                }
                
                const data = await response.json();
                
                // Limpiamos el contenedor
                container.innerHTML = '';
                
                // Tomamos los primeros 9 personajes (3 filas de 3)
                const characters = data.results.slice(0, 9);
                
                // Creamos las cards para cada personaje
                characters.forEach(character => {
                    const card = document.createElement('div');
                    card.className = 'card';
                    
                    card.innerHTML = `
                        <img src="${character.image}" alt="${character.name}" class="card-image">
                        <div class="card-content">
                            <h2 class="card-title">${character.name}</h2>
                            <div class="card-info">
                                <i>👽</i>
                                <span>${character.species}</span>
                            </div>
                            <div class="card-info">
                                <i>⚧️</i>
                                <span>${character.gender}</span>
                            </div>
                        </div>
                    `;
                    
                    container.appendChild(card);
                });
                
            } catch (error) {
                console.error('Error:', error);
                container.innerHTML = `
                    <div class="error">
                        <p>¡Ups! No pudimos cargar los personajes.</p>
                        <p>Intenta recargar la página.</p>
                    </div>
                `;
            }
        }

        // Llamamos a la función cuando se carga la página
        document.addEventListener('DOMContentLoaded', fetchCharacters);
    </script>
</body>
</html>