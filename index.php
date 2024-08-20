<?php

require_once 'modelo/Estacionamiento.php';
require_once 'modelo/TipoVehiculo.php';


$TV = new TipoVehiculo();
$TV-> Id = 1 ;
$TV-> Descripcion = 'Auto';

$E1 = New Estacionamiento();
$E1->Id = 1 ;
$E1->FechaHoraIngreso = '2024-08-16T12.00';
$E1->FechaHoraSalida = '2024-08-07T15.00';
$E1->Precio = '$8000';


$E2 = New Estacionamiento();
$E2->Id = 2;
$E2->FechaHoraIngreso = '2024-08-17T13.00';
$E2->FechaHoraSalida = '2024-08-18T18.00';
$E2->Precio = '$12000';

$E3 = New Estacionamiento();
$E3->Id = 3;
$E3->FechaHoraIngreso = '2024-08-19T13.00';
$E3->FechaHoraSalida = '2024-08-19T18.00';
$E3->Precio = '$9000';

$TV->ListaEstacionamiento[]= $E1;
$TV->ListaEstacionamiento[]= $E2;
$TV->ListaEstacionamiento[]= $E3;

$TV->MostrarDatos();