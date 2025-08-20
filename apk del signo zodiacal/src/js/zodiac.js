document.addEventListener('DOMContentLoaded', function() {
    fetch('/aplication.json')
        .then(response => response.json())
        .then(data => {
            console.log(data.signosZodiacales);
        })
        .catch(error => console.error('Error:', error));

    const form = document.querySelector('form');
    const resultadoDiv = document.querySelector('.resultado');
    const errorDiv = document.querySelector('.error');

    form.addEventListener('submit', function(e) {
        e.preventDefault();
        errorDiv.style.display = 'none';

        const dia = document.getElementById('dia').value;
        const mes = document.getElementById('mes').value;

        if (validarFecha(dia, mes)) {
            enviarDatos(dia, mes);
        } else {
            mostrarError('Fecha inválida. Por favor, verifica el día y mes ingresados.');
        }
    });

    function validarFecha(dia, mes) {
        dia = parseInt(dia);
        mes = parseInt(mes);

        if (mes < 1 || mes > 12) return false;

        const diasPorMes = [31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        return dia > 0 && dia <= diasPorMes[mes - 1];
    }

    function enviarDatos(dia, mes) {
        fetch('validar.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: `dia=${dia}&mes=${mes}`
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                mostrarError(data.error);
            } else {
                mostrarResultado(data);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            mostrarError('Ocurrió un error al procesar la solicitud.');
        });
    }

    function formatDate(mes, dia) {
        const meses = [
            "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio",
            "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
        ];
        return `${dia} de ${meses[mes - 1]}`;
    }

    function mostrarResultado(signo) {
        resultadoDiv.innerHTML = `
            <h2>${signo.nombre} (${formatDate(signo.inicio.mes, signo.inicio.dia)} - ${formatDate(signo.fin.mes, signo.fin.dia)})</h2>
            <div class="imagenes-container">
                <div class="imagen-wrapper">
                    <div class="imagen-titulo">Símbolo</div>
                    <img src="${signo.imagen}" alt="${signo.nombre}" class="imagen">
                </div>
                <div class="imagen-wrapper">
                    <div class="imagen-titulo">Caballero Guardian</div> 
                    <p>${signo.caballero}</p>
                    <img src="${signo.constelacion}" alt="Constelación de ${signo.nombre}" class="imagen">
                </div>
            </div>
            <div class="info-container">
                <p>${signo.info}</p>
            </div>
        `;
        resultadoDiv.style.display = 'block';
    }

    function mostrarError(mensaje) {
        errorDiv.textContent = mensaje;
        errorDiv.style.display = 'block';
    }
});
