# ACD-SistemaPerfilUsuario
---
## Objetivo

Comprender y aplicar los conceptos de autenticación, manejo de sesiones y actualización segura
de datos de usuario en PHP, desarrollando una solución práctica que proteja la información del
usuario y gestione correctamente el estado de sesión en una aplicación web.
---
### Descripción de la actividad
Desarrollar un pequeño sistema web que permita:
1. Autenticación de usuarios mediante login con PHP y MySQL.
2. Acceso a una zona privada de perfil, visible solo para usuarios autenticados.
3. Actualización de datos básicos del perfil (nombre, correo, etc.).
4. Cambio de contraseña de forma segura, verificando la contraseña actual y almacenando la nueva con hash.
5. Cierre de sesión para finalizar la autenticación.

## Lineamientos
### 1. Desarrollo técnico
Base de datos:
Crear una tabla usuarios

  1.  cédula
  2.  nombre
  3.  correo
  4.  password(hash, usando password_hash)
  5.  fecha_registro

#### Funcionalidades mínimas:
##### Registro de usuario:
  1. Validar que el correo no esté repetido-
  2. Guardar la contraseña con hash.
##### Login:
  1. Formulario de inicio de sesión (correo contraseña).
  2. Validación de credenciales en PHP_
  3. Creación de sesión al autenticar conectamente-
##### Zona privada de perfil (perfil . php):
  1. Solo accesible si la sesión está activa.
  2. Mostrar datos del usuario (nombre, correo)-
  3. Formulario para actualizar nombre y/o correo.
  4. Validar en servidor antes de actualizar.
##### Cambio de contraseña (cambiar_password . php):
  1. Pedir contraseña actual. nueva contraseña y confirmación.
  2. Verificar la contraseña actual usando ify.
  3. Guardar la nueva contraseña con
  4. Mostrar mensajes claros de éxito o error.
##### Cierre de sesión (1 ogout• . php)•.
  1. Destruir la sesión y redirigir al login.
##### Seguridad mínima esperada:
  1. Uso de password_hash y password_veri F y.
  2. Validación básica de inputs (no vacíos. formato de correo válido).
  3. Comprobación de sesión activa en páginas restringidas.
---
### 2. Presentación
---
#### Video explicativo (mínimo 3 minutos). donde se muestre:
1. Flujo completo: login perfil actualización de datos cambio de contraseña logout-
2. Cómo se maneja la sesión PHP (ejemplo con S_SESSION).
3. Qué medidas de seguridad se aplicaron (hash de contraseña, validaciones, verificación de
sesión).
#### Repositorio:
1. **Subir el código fuente a un repositorio público (GitHub. GitLab. Bitbucket. etc.).**
2. **EI repositorio debe mostrar:**
   - Estructura clara dc archivos (formularios, lógica, conexión, etc.).
3. **Archivo README con:**
   - Descripción breve del sistema.
   - Requisitos (PHP. MySQL. etc.).
   - Pasos para instalar y probar localmente.



