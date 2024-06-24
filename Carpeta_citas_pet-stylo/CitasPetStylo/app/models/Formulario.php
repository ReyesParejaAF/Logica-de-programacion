<?php

require_once 'Database.php';

class Formulario {
    private $conn;
    private $table_name = "citas";

    public $id;
    public $nombre_propietario;
    public $numero_contacto;
    public $numero_contacto_adicional;
    public $correo;
    public $nombre_mascota;
    public $raza_mascota;
    public $fecha_cita;
    public $certificados_medicos;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " SET
                    nombre_propietario=:nombre_propietario,
                    numero_contacto=:numero_contacto,
                    numero_contacto_adicional=:numero_contacto_adicional,
                    correo=:correo,
                    nombre_mascota=:nombre_mascota,
                    raza_mascota=:raza_mascota,
                    fecha_cita=:fecha_cita,
                    certificados_medicos=:certificados_medicos";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(":nombre_propietario", $this->nombre_propietario);
        $stmt->bindParam(":numero_contacto", $this->numero_contacto);
        $stmt->bindParam(":numero_contacto_adicional", $this->numero_contacto_adicional);
        $stmt->bindParam(":correo", $this->correo);
        $stmt->bindParam(":nombre_mascota", $this->nombre_mascota);
        $stmt->bindParam(":raza_mascota", $this->raza_mascota);
        $stmt->bindParam(":fecha_cita", $this->fecha_cita);
        $stmt->bindParam(":certificados_medicos", $this->certificados_medicos);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}