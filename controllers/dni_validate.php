<?php
/**
 * Valida una cédula ecuatoriana
 * @param string $cedula Número de cédula a validar
 * @return bool true si es válida, false si no
 */
function validarCedulaEcuatoriana($cedula) {
    // Eliminar espacios y caracteres no numéricos
    $cedula = preg_replace('/\D/', '', $cedula);

    // Debe tener exactamente 10 dígitos
    if (strlen($cedula) !== 10) {
        return false;
    }

    // Los dos primeros dígitos corresponden a la provincia (01-24)
    $provincia = (int)substr($cedula, 0, 2);
    if ($provincia < 1 || $provincia > 24) {
        return false;
    }

    // El tercer dígito debe ser menor a 6 para personas naturales
    $tercerDigito = (int)$cedula[2];
    if ($tercerDigito >= 6) {
        return false;
    }

    // Algoritmo de validación (módulo 10)
    $total = 0;
    for ($i = 0; $i < 9; $i++) {
        $digito = (int)$cedula[$i];
        if ($i % 2 === 0) { // posiciones impares (0-index)
            $digito *= 2;
            if ($digito > 9) {
                $digito -= 9;
            }
        }
        $total += $digito;
    }

    $digitoVerificador = (10 - ($total % 10)) % 10;

    // Comparar con el último dígito
    return $digitoVerificador === (int)$cedula[9];
}

?>