<!DOCTYPE html>
<html>
    <head>
        <title>PHP Práctica 02.1</title>
    </head>
    <body>
        
<?php

// Array asociativo multidimensional de socios
$socios = [
    '01' => [
        'id'       => '01',
        'nombre'   => 'Pedro',
        'apellidos'=> 'Ramírez',
        'dni'      => '12345678A',
        'email'    => 'pramirez@gmail.com',
        'telefono' => '999555999',
        'pagosMensuales' => [
            '2025-01' => ['nombreMes' => 'Enero',       'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-01-05'],
            '2025-02' => ['nombreMes' => 'Febrero',     'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-02-05'],
            '2025-03' => ['nombreMes' => 'Marzo',       'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-04' => ['nombreMes' => 'Abril',       'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-04-05'],
            '2025-05' => ['nombreMes' => 'Mayo',        'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-06' => ['nombreMes' => 'Junio',       'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-06-05'],
            '2025-07' => ['nombreMes' => 'Julio',       'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-08' => ['nombreMes' => 'Agosto',      'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-08-05'],
            '2025-09' => ['nombreMes' => 'Septiembre',  'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-09-05'],
            '2025-10' => ['nombreMes' => 'Octubre',     'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-11' => ['nombreMes' => 'Noviembre',   'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-12' => ['nombreMes' => 'Diciembre',   'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
        ],
    ],
    '02' => [
        'id'       => '02',
        'nombre'   => 'Cecilia',
        'apellidos'=> 'Ramírez',
        'dni'      => '12345678C',
        'email'    => 'cramirez@gmail.com',
        'telefono' => '633555444',
        'pagosMensuales' => [
            '2025-01' => ['nombreMes' => 'Enero',       'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-01-05'],
            '2025-02' => ['nombreMes' => 'Febrero',     'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-02-05'],
            '2025-03' => ['nombreMes' => 'Marzo',       'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-04' => ['nombreMes' => 'Abril',       'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-04-05'],
            '2025-05' => ['nombreMes' => 'Mayo',        'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-06' => ['nombreMes' => 'Junio',       'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-06-05'],
            '2025-07' => ['nombreMes' => 'Julio',       'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-08' => ['nombreMes' => 'Agosto',      'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-08-05'],
            '2025-09' => ['nombreMes' => 'Septiembre',  'importeCuota' => 50, 'estado' => 'Pagado',    'fechaPago' => '2025-09-05'],
            '2025-10' => ['nombreMes' => 'Octubre',     'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-11' => ['nombreMes' => 'Noviembre',   'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
            '2025-12' => ['nombreMes' => 'Diciembre',   'importeCuota' => 50, 'estado' => 'Pendiente', 'fechaPago' => null],
        ],
    ],
];

// Obtener datos de los socios y tabla con los pagos:
$socio = $socios['01'];
$totalPagado = 0;

// echo "<h1>Datos socio:</h1>";

?>

        <h1>Datos socio:</h1>
        <p><strong>Nombre:</strong> <?= $socio['nombre']?></p>
        <p><strong>Apellidos:</strong> <?= $socio['apellidos']?></p>
        <p><strong>DNI:</strong> <?= $socio['dni']?></p>
        <p><strong>Teléfono:</strong> <?= $socio['telefono']?></p>
        <p><strong>Email:</strong> <?= $socio['email']?></p>

        <h2>Pagos mensuales</h2>
        <table cellpadding="5">
            <tr>
                <th>Mes</th>
                <th>Importe</th>
                <th>Estado</th>
                <th>Fecha de pago</th>
            </tr>

            <?php foreach($socio['pagosMensuales'] as $mes => $pago): ?>
            
                <tr <?php if($pago['estado'] === 'Pendiente') echo 'style="background-color:#f8d7da; color:#721c24;"'; ?>>
                    <td><?= $pago['nombreMes'] ?></td>
                    <td><?= $pago['importeCuota'] ?></td>
                    <td><?= $pago['estado'] ?></td>
                    <td><?= $pago['fechaPago'] ?? '-' ?></td>
                </tr>

                <?php if($pago['estado'] === 'Pagado') $totalPagado += $pago['importeCuota'];?>

            <?php endforeach; ?>

             <tr>
                <td><strong>Total abonado:</strong></td>
                <td><?= $totalPagado ?>€</td>
            </tr>
          
        </table>
    </body>
</html>