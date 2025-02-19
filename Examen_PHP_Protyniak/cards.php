
<?php
    $archivo = 'datos/datos.json';
    $miArray = cargadorJSON($archivo);
    echo '<div class="container">';
    foreach($miArray['films'] as $miFilm) {
        echo '<div class="movie-card">
		<div class="movie-header">
            <img class="poster" src="'.$miFilm['poster'].'">
		</div>
		<div class="movie-content">
			<div class="movie-content-header">
				<a href="#">
					<h3 class="movie-title">'.$miFilm['titulo'].'</h3>
				</a>
			</div>
			<div class="movie-info">
				<div class="info-section">
                    <label>Año: </label>
					<span>'.$miFilm['ano'].'</span>
				</div><!--date,time-->
				<div class="info-section">
					<label>País: </label>
					<span>'.$miFilm['pais'].'</span>
				</div>
			</div>
		</div>
	</div>';
    };
    echo '</div>';
?>
