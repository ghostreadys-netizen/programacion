<?php
// Array asociativo con la información de los signos zodiacales
$signosZodiacales = [
  [
    'inicio' => ['mes' => 3, 'dia' => 21],
    'fin' => ['mes' => 4, 'dia' => 19],
    'nombre' => 'Aries',
    'imagen' => 'aries.jpg',
    'caballero' => 'Mu de Aries',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-7.jpg',
    'info' => 'Aries es un signo de fuego, lleno de energía y entusiasmo. Son líderes naturales, impetuosos y determinados.'
  ],

  [
    'inicio' => ['mes' => 4, 'dia' => 20],
    'fin' => ['mes' => 5, 'dia' => 20],
    'nombre' => 'Tauro',
    'imagen' => 'tauro.jpg',
    'caballero' => 'Aldebarán de Tauro',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-8.jpg',
    'info' => 'Tauro es un signo de tierra, conocido por su paciencia, determinación y apreciación por el confort.'
  ],

  [
    'inicio' => ['mes' => 5, 'dia' => 21],
    'fin' => ['mes' => 6, 'dia' => 20],
    'nombre' => 'Géminis',
    'imagen' => 'geminis.jpg',
    'caballero' => 'Saga de Géminis',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-9.jpg',
    'info' => 'Géminis es un signo de aire, caracterizado por su dualidad, adaptabilidad y curiosidad intelectual.'
  ],

  [
    'inicio' => ['mes' => 6, 'dia' => 21],
    'fin' => ['mes' => 7, 'dia' => 22],
    'nombre' => 'Cáncer',
    'imagen' => 'cancer.jpg',
    'caballero' => 'Máscara de Muerte de Cáncer – ',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-10.jpg',
    'info' => 'Cáncer es un signo de agua, muy emocional, protector y con fuertes vínculos familiares.'
  ],

  [
    'inicio' => ['mes' => 7, 'dia' => 23],
    'fin' => ['mes' => 8, 'dia' => 22],
    'nombre' => 'Leo',
    'imagen' => 'leo.jpg',
    'caballero' => 'Aioria de Leo ',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-11.jpg',
    'info' => 'Leo es un signo de fuego, caracterizado por su carisma, creatividad y liderazgo natural.'
  ],

  [
    'inicio' => ['mes' => 8, 'dia' => 23],
    'fin' => ['mes' => 9, 'dia' => 22],
    'nombre' => 'Virgo',
    'imagen' => 'virgo.jpg',
    'caballero' => 'Shaka de Virgo',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-12.jpg',
    'info' => 'Virgo es un signo de tierra, conocido por su perfeccionismo, practicidad y atención al detalle.'
  ],

  [
    'inicio' => ['mes' => 9, 'dia' => 23],
    'fin' => ['mes' => 10, 'dia' => 22],
    'nombre' => 'Libra',
    'imagen' => 'libra.jpg',
    'caballero' => 'Dohko de Libra ',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-13.jpg',
    'info' => 'Libra es un signo de aire, que busca el equilibrio, la armonía y la justicia en todo.'
  ],

  [
    'inicio' => ['mes' => 10, 'dia' => 23],
    'fin' => ['mes' => 11, 'dia' => 21],
    'nombre' => 'Escorpio',
    'imagen' => 'escorpio.jpg',
    'caballero' => 'Milo de Escorpión ',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-14.jpg',
    'info' => 'Escorpio es un signo de agua, intenso, apasionado y muy perspicaz.'
  ],

  [ //sagitario
    'inicio' => ['mes' => 11, 'dia' => 22],
    'fin' => ['mes' => 12, 'dia' => 21],
    'nombre' => 'Sagitario',
    'caballero' => 'Seiya de Pegaso ',
    'imagen' => 'sagitario.jpg',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-15.jpg',
    'info' => 'Sagitario es un signo de fuego, aventurero, optimista y amante de la libertad.'
  ],

  [
    'inicio' => ['mes' => 12, 'dia' => 22],
    'fin' => ['mes' => 1, 'dia' => 19],
    'nombre' => 'Capricornio',
    'imagen' => 'capricornio.jpg',
    'caballero' => 'Shura de Capricornio',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2023/03/CABALLEROS-DEL-ZODIACO-16.jpg',
    'info' => 'Capricornio es un signo de tierra, ambicioso, disciplinado y paciente.'
  ],

  [
    'inicio' => ['mes' => 1, 'dia' => 20],
    'fin' => ['mes' => 2, 'dia' => 18],
    'nombre' => 'Acuario',
    'imagen' => 'acuario.jpg',
    'caballero' => 'Camus de Acuario',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2020/10/CABALLEROS-DEL-ZODIACO-17.jpg',
    'info' => 'Acuario es un signo de aire, original, independiente y humanitario.'
  ],

  [
    'inicio' => ['mes' => 2, 'dia' => 19],
    'fin' => ['mes' => 3, 'dia' => 20],
    'nombre' => 'Piscis',
    'imagen' => 'piscis.jpg',
    'caballero' => 'Afrodita de Piscis ',
    'constelacion' => 'https://global-pop-magazine.com/wp-content/uploads/2020/10/CABALLEROS-DEL-ZODIACO-18.jpg',
    'info' => 'Piscis es un signo de agua, intuitivo, sensible y muy compasivo.'
  ]
];

// Función optimizada para obtener el signo zodiacal
function obtenerSigno($dia, $mes, $signos)
{
  $fecha = strtotime("2024-$mes-$dia"); // Usamos un año bisiesto para febrero

  foreach ($signos as $signo) {
    $inicio = $signo['inicio'];
    $fin = $signo['fin'];

    // Manejo especial para signos que cruzan cambio de año (ejemplo: Capricornio)
    $fechaInicio = strtotime("2024-{$inicio['mes']}-{$inicio['dia']}");
    $fechaFin = strtotime("2024-{$fin['mes']}-{$fin['dia']}");

    if ($fin['mes'] < $inicio['mes']) {
      // Para signos que cruzan el año
      if ($mes >= $inicio['mes'] || $mes <= $fin['mes']) {
        $fechaActual = strtotime("2024-$mes-$dia");
        if (($mes == $inicio['mes'] && $dia >= $inicio['dia']) ||
          ($mes == $fin['mes'] && $dia <= $fin['dia']) ||
          ($mes > $inicio['mes'] || $mes < $fin['mes'])
        ) {
          return $signo;
        }
      }
    } else {
      // Para el resto de los signos
      if ($fecha >= $fechaInicio && $fecha <= $fechaFin) {
        return $signo;
      }
    }
  }
}

// Validación simple de la fecha
function validarFecha($dia, $mes)
{
  $diasPorMes = [
    1 => 31,
    2 => 29,
    3 => 31,
    4 => 30,
    5 => 31,
    6 => 30,
    7 => 31,
    8 => 31,
    9 => 30,
    10 => 31,
    11 => 30,
    12 => 31
  ];

  return $mes >= 1 && $mes <= 12 && $dia >= 1 && $dia <= $diasPorMes[$mes];
}

$error = '';
$signo = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dia = $_POST['dia'] ?? 0;
  $mes = $_POST['mes'] ?? 0;

  if (!validarFecha($dia, $mes)) {
    $error = "Fecha inválida";
  } else {
    $signo = obtenerSigno($dia, $mes, $signosZodiacales);
  }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signos Zodiacales</title>
    <link rel="stylesheet" type="text/css" href="/src/css/styles.css">

</head>

<body>
    <div class="container show-content">
        <h1>Descubre tu Signo Zodiacal</h1>
        <section>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="dia">Día:</label>
                    <input type="number" id="dia" name="dia" min="1" max="31" required>
                </div>

                <div class="form-group">
                    <label for="mes">Mes:</label>
                    <select id="mes" name="mes" required>
                        <option value="1">Enero</option>
                        <option value="2">Febrero</option>
                        <option value="3">Marzo</option>
                        <option value="4">Abril</option>
                        <option value="5">Mayo</option>
                        <option value="6">Junio</option>
                        <option value="7">Julio</option>
                        <option value="8">Agosto</option>
                        <option value="9">Septiembre</option>
                        <option value="10">Octubre</option>
                        <option value="11">Noviembre</option>
                        <option value="12">Diciembre</option>
                    </select>
                </div>

                <button type="submit">Calcular mi signo</button>
            </form>

            <?php if ($error): ?>
            <div class="error"><?php echo $error; ?></div>
            <?php endif; ?>

            <?php if ($signo): ?>
            <div class="resultado">
                <h2><?php echo $signo['nombre']; ?></h2>
                <div class="imagenes-container">
                    <div class="imagen-wrapper">
                        <div class="imagen-titulo">Símbolo</div>
                        <img src="<?php echo $signo['imagen']; ?>" alt="<?php echo $signo['nombre']; ?>" class="imagen">
                    </div>
                    <div class="imagen-wrapper">
                        <div class="imagen-titulo">Caballero</div>
                        <p><?php echo $signo['caballero'] ?> </p>
                        <img src="<?php echo $signo['constelacion']; ?>"
                            alt="Constelación de <?php echo $signo['nombre']; ?>" class="imagen">
                    </div>
                </div>
                <div class="info-container">
                    <p><?php echo $signo['info']; ?></p>
                </div>
            </div>
            <?php endif; ?>
    </div>
    </section>
</body>

</html>