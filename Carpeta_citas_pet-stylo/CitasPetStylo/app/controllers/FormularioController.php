<?php

require_once __DIR__ . '/../models/Formulario.php'; 

class FormularioController {
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $formulario = new Formulario();

            $formulario->nombre_propietario = $_POST['name'];
            $formulario->numero_contacto = $_POST['tel'];
            $formulario->numero_contacto_adicional = $_POST['tel2'];
            $formulario->correo = $_POST['mail'];
            $formulario->nombre_mascota = $_POST['mascota'];
            $formulario->raza_mascota = $_POST['razamascota'];
            $formulario->fecha_cita = $_POST['fecha'];
            $formulario->certificados_medicos = $_POST['saludmascota'];

            if ($formulario->create()) {
                echo "Cita agendada exitosamente.";
            } else {
                echo "Error al agendar la cita.";
            }
        }
    }
}
