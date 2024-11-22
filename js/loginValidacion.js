document.getElementById("loginForm").addEventListener("submit", function(event) {
    const usuario = document.getElementById("usuario").value.trim();
    const contrasena = document.getElementById("contrasena").value.trim();

   
    if (!usuario || !contrasena) {
        event.preventDefault();
        alert("Por favor, llena todos los campos antes de continuar.");
        return;
    }

    if (usuario === "admin" && contrasena === "123") {
     
        event.preventDefault();
        window.location.href = "home.html";
    } else {
       
        event.preventDefault();
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Credenciales incorrectas!",
        
          });
    }
});
