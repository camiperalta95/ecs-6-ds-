<?php

class TipoVehiculo{

    public $Id;
    public $Descripcion;
    public $ListaEstacionamiento= array();


    public function MostrarDatos(){

        echo 'Id del tipo de vehiculo: ' . $this->Id . '<br>';
        echo 'Descripcion del tipo de vehiculo: ' . $this->Descripcion . '<br>';

        echo 'Estacionamiento: <br>';
        foreach ($this->ListaEstacionamiento as $Estacionamiento){

            echo $Estacionamiento->FechaHoraIngreso .'-' . $Estacionamiento->FechaHoraSalida . '-'. $Estacionamiento->Precio . '<br>'; 
            
              


        }

    }

}