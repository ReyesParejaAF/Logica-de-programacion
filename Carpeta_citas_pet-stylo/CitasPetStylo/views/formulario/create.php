<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agendar Cita</title>
  <link rel="stylesheet" href="/public/styles/admin.css">
  <style>
    #message {
      color: green;
      font-weight: bold;
      text-align: center;
      font-size: 1.4em; 
      margin-bottom: 20px; 
      font-family: 'Times New Roman', Times, serif; 
    }
  </style>
</head>
<body>
  <div class="citas1">
    <label for="aviso">
      <h3>Agende su cita:</h3>
    </label>

    
    <div id="message"></div>

    <form id="citaForm" action="index.php?action=create" method="POST" onsubmit="return validarFormulario()">
      <label for="nombre">Nombre del propietario:*</label>
      <input type="text" name="name" id="nombre">

      <label for="contacto">Numero de contacto:*</label>
      <input type="tel" name="tel" id="contacto">

      <label for="contacto2">Numero de contacto adicional:</label>
      <input type="tel" name="tel2" id="contacto2">

      <label for="correo">Correo</label>
      <input type="email" name="mail" id="correo">

      <label for="nmascota">Nombre de la mascota:</label>
      <input type="text" name="mascota" id="nmascota">

      <label for="rmascota">Raza de la mascota:*</label>
      <input type="text" name="razamascota" id="rmascota">

      <label for="fecha">Fecha de la cita:*</label>
      <input type="date" name="fecha" id="fecha" oninput="validarFecha()"><br><br>

      <label for="smascota">Certificados medicos:*</label>
      <input type="file" name="saludmascota" id="smascota">

      <br><br>

      <input type="submit" value="Agendar">
    </form>

    <script>
      function validarFormulario() {
        var nombre = document.getElementById('nombre').value.trim();
        var contacto = document.getElementById('contacto').value.trim();
        var rmascota = document.getElementById('rmascota').value.trim();
        var fecha = document.getElementById('fecha').value;
        var smascota = document.getElementById('smascota').value.trim();

        if (nombre === '' || contacto === '' || rmascota === '' || fecha === '' || smascota === '') {
          alert('Por favor, complete los campos obligatorios (*) para proceder al envío.');
          return false;
        }

        var today = new Date().toISOString().split('T')[0];
        if (fecha < today) {
          alert('Seleccione una fecha futura para la cita.');
          return false;
        }

        return true;
      }

      function validarFecha() {
        var fecha = document.getElementById('fecha').value;
        var today = new Date().toISOString().split('T')[0];

        if (fecha < today) {
          alert('Seleccione una fecha futura para la cita.');
        }
      }

      //Manejo envío del formulario mediante JavaScript
      document.getElementById('citaForm').addEventListener('submit', function(event) {
        event.preventDefault();
        if (validarFormulario()) {
          var formData = new FormData(this);
          fetch('index.php?action=create', {
            method: 'POST',
            body: formData
          })
          .then(response => response.text())
          .then(data => {
            document.getElementById('message').innerText = 'Cita agendada exitosamente.';
            document.getElementById('citaForm').reset();
          })
          .catch(error => {
            document.getElementById('message').innerText = 'Error al agendar la cita.';
            document.getElementById('message').style.color = 'red';
          });
        }
      });

      alert('Bienvenido al sistema de agendamiento. Por favor, complete los datos solicitados.');
    </script>
  </div>
</body>
</html>