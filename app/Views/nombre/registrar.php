<div id="container">
        <header>
            <h1>Registro de Animales - Zoológico</h1>
        </header>
        <div id="formulario">
            <form action="#" method="post">
                <label for="nombre">Nombre del animal:</label>
                <input type="text" id="nombre" name="nombre" required>

                <label for="especie">Especie:</label>
                <input type="text" id="especie" name="especie" required>

                <label for="edad">Edad:</label>
                <input type="text" id="edad" name="edad" required>

                <label for="alimentacion">Alimentación:</label>
                <input type="text" id="alimentacion" name="alimentacion" required>

                <label for="habitat">Hábitat:</label>
                <select id="habitat" name="habitat" required>
                    <option value="selva">Selva</option>
                    <option value="desierto">Desierto</option>
                    <option value="oceano">Océano</option>
                    <option value="pradera">Pradera</option>
                    <option value="montaña">Montaña</option>
                </select>

                <button type="submit">Registrar Animal</button>
            </form>
        </div>
    </div>