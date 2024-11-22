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
      alert('¡Hiciste clic en editar tanda!');
    }else{
      alert('¡Hiciste clic en ver particpantes!');
    }
  });
});