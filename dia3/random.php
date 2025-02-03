<?php
    $alumnos = ['Ivan', 'Simon', 'Miguel', 'Juan', 'Valerio'];
    $cursos = ['"Carpiteria"', '"Programacion"', '"Diseño"', '"Fotografia"', '"Matematicas"', '"Fisica"'];

    function mostrar($alumnos, $cursos){
        echo '<br>';
        for ($i=0; $i < count($alumnos); $i++) { 
            echo $alumnos[$i]. ' ';
        }
        echo '<br>';
        for ($i=0; $i < count($cursos); $i++) { 
            echo $cursos[$i]. ' ';
        }
    }
    mostrar($alumnos, $cursos);

    /*Randon curso para random alummno*/
    $colores = ['red','blue','green','yellow'];
    $numeroRadomAlumnos = rand(0, count($alumnos)-1);
    echo '<br>';
    echo $numeroRadomAlumnos;

    $numeroRandomCursos = rand(0, count($cursos)-1);
    echo '<br>';
    echo $numeroRandomCursos;
    echo '<br>';
    $text = 'Alumno con nombre ' .$alumnos[$numeroRadomAlumnos]. ' estudio en curso ' .$cursos[$numeroRandomCursos];
    echo $text;
    /*con bucle FOR y random colores*/
    for ($i = 0; $i < count($alumnos); $i++) {
        for ($j = 0; $j < count($cursos); $j++) {
            $randAlumno = rand(0, count($alumnos) - 1);
            $randCurso = rand(0, count($cursos) - 1);
            $randColor = rand(0, count($colores) - 1);
            echo "<p style=\"color: $colores[$randColor]\"> Alumno con nombre ".$alumnos[$randAlumno] . ' estudio en curso ' . $cursos[$randCurso] . "</p><br>";
        }
    }



?>