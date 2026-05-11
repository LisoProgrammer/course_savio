<div class="filters-container">

    <div class="filters-header">
        <h2>Filtros</h2>
    </div>

    <div class="filters-content">

        <div class="filter-group">
            <label>Seleccionar semana</label>

            <select id="weekSelector" onchange="changeWeek()">
                <?php
                for($i = 1; $i <= 16; $i++) {
                    echo "<option>Semana $i</option>";
                }
                ?>
            </select>
        </div>

        <div class="quick-links">
            <a href="#"><img src="assets/people.png" alt=""> Participantes</a>
            <a href="#"><img src="assets/grades.png" alt=""> Calificaciones</a>
        </div>

    </div>

</div>