document.getElementById("btnSave").onclick =(evt)=>{
    evt.preventDefault()
    document.getElementById("form").classList.add('was-validated')

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2500,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.onmouseenter = Swal.stopTimer;
          toast.onmouseleave = Swal.resumeTimer;
        }
      });
      Toast.fire({
        icon: "success",
        title: "Tanda creada"
      });

}

const participantes = [
  "Carlos López",
  "Ana Martínez",
  "Pedro Ramírez",
  "Lucía Fernández",
  "Jorge Pérez",
  "Sofía García",
  "Mario Torres",
  "Valeria Jiménez",
  "Andrés Castro",
  "María González"
];

// Función para obtener 5 participantes aleatorios
function obtenerParticipantesAleatorios(lista, cantidad) {
  const shuffled = lista.sort(() => 0.5 - Math.random()); // Mezcla aleatoria
  return shuffled.slice(0, cantidad); // Selecciona los primeros `cantidad` elementos
}

// Obtener 5 participantes aleatorios
const seleccionados = obtenerParticipantesAleatorios(participantes, 5);

// Mostrar alerta con la lista


const buttons = document.querySelectorAll('.custom-btn');

// Agregar un evento a cada botón
buttons.forEach((button) => {
  button.addEventListener('click', () => {
    if (button.classList.contains('borrarTanda')) {
      Swal.fire({
        title: "Estas seguro que desea eliminar esta tanda?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Si, borrar!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Tanda eliminada!",
    
            icon: "success"
          });
        }
      });
    } else if(button.classList.contains('editarTanda')){
      Swal.fire("Aqui podras editar tus tandas!");
    }else{
      Swal.fire({
        title: "Lista de Participantes",
        html: `<ul>${seleccionados
          .map(p => `<li style="color: white;">${p}</li>`)
          .join('')}</ul>`,
        icon: "info",
        confirmButtonText: "Cerrar"
      });
    }
  });
});